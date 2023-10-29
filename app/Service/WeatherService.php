<?php

namespace App\Service;

use App\Models\City;
use App\Models\DTO\WeatherDto;
use Http;
use Illuminate\Http\Client\Response;
use Str;

class WeatherService {
    private const LAT_REPLACE  = '%%lat%%';
    private const LONG_REPLACE = '%%long%%';
    private const TZ_REPLACE   = '%%tz%%';
    private const BASE_URL     = 'https://api.open-meteo.com/v1/forecast?';
    private const URL          = 'latitude=%%lat%%&longitude=%%long%%&current=temperature_2m,weathercode&daily=sunrise,sunset&timezone=%%tz%%';
    
    public function getWeatherData() {
        $url = $this->buildUrl();
        $final_url = self::BASE_URL . $url;
        $response = Http::get($final_url);
        return $this->parseResponse($response);
    }
    
    private function parseResponse(Response $response): array {
        $rawData = $response->json();
        if (!is_array($rawData)) {
            return [];
        }
        return $this->parseWeatherData($rawData);
    }
    
    private function parseWeatherData(array $rawData): array {
        $weather_dtos = [];
        foreach ($rawData as $data) {
            $weather_dtos[] = $this->parseCityData($data);
        }
        return $weather_dtos;
    }
    
    private function parseCityData(array $cityData): WeatherDto {
        $lat = round($cityData['latitude'], 2);
        $long = round($cityData['longitude'], 2);
        $lat = number_format($lat, 2);
        $long = number_format($long, 2);
        $lat_long = $lat . ',' . $long;
        $city = City::where('weather_city_id', $lat_long)->first();
        try {
            $cityName = $city->name;
            $countryName = $city->country->name;
            $languageName = $city->country->language->name;
            $temperature = $cityData['current']['temperature_2m'];
            $weatherCode = $cityData['current']['weathercode'];
            $sunrise = Str::after($cityData['daily']['sunrise'][0], 'T');
            $sunset = Str::after($cityData['daily']['sunset'][0], 'T');
        } catch (\Exception $e) {
            dd($cityData, $lat_long);
        }
        return new WeatherDto(
            $cityName,
            $countryName,
            $languageName,
            $temperature,
            $weatherCode,
            $sunrise,
            $sunset,
        );
    }
    
    private function buildUrl(): string {
        $longitude_string = '';
        $latitude_string = '';
        $tz_string = '';
        $cities = City::all();
        foreach ($cities as $city) {
            $long_lat = explode(',', $city->weather_city_id);
            $longitude_string = $this->addPartToFinalString($longitude_string, $long_lat[0]);
            $latitude_string = $this->addPartToFinalString($latitude_string, $long_lat[1]);
            $timezone = $this->getTimeZoneForCountry($city->country->name);
            $tz_string = $this->addPartToFinalString($tz_string, $timezone);
        }
        return $this->replaceUrlPlaceholders($longitude_string, $latitude_string, $tz_string);
    }
    
    private function getTimeZoneForCountry(string $country): string {
        return match ($country) {
            'Latvia'    => 'Europe/Riga',
            'Lithuania' => 'Europe/Vilnius',
            default     => 'Europe/Tallinn',
        };
    }
    
    private function addPartToFinalString(string $finalString, string $part): string {
        return $finalString . ',' . $part;
    }
    
    private function replaceUrlPlaceholders(string $lat, string $long, string $tz): string {
        $base = self::URL;
        $base = str_replace(self::LAT_REPLACE, $lat, $base);
        $base = str_replace(self::LONG_REPLACE, $long, $base);
        return str_replace(self::TZ_REPLACE, $tz, $base);
    }
}
