<?php

namespace App\Models\DTO;

class WeatherDto {
    public function __construct(
        public readonly string $cityName,
        public readonly string $countryName,
        public readonly string $languageName,
        public readonly string $temperature,
        public readonly string $weatherCode,
        public readonly string $sunrise,
        public readonly string $sunset,
    ) {}
}
