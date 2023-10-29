<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $estonia_id = Country::where('name', 'Estonia')->first()->id;
        $latvia_id = Country::where('name', 'Latvia')->first()->id;
        $lithuania_id = Country::where('name', 'Lithuania')->first()->id;
        City::make(
            [
                'name'            => 'Tallinn',
                'weather_city_id' => '59.43,24.75',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Pärnu',
                'weather_city_id' => '58.38,24.48',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Tartu',
                'weather_city_id' => '58.37,26.72',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Narva',
                'weather_city_id' => '59.37,28.17',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Kärdla',
                'weather_city_id' => '58.99,22.74',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Riga',
                'weather_city_id' => '56.94,24.11',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Jurmala',
                'weather_city_id' => '56.95,23.78',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Liepaja',
                'weather_city_id' => '56.52,21.06',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Daugavpils',
                'weather_city_id' => '55.88,26.55',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Ventspils',
                'weather_city_id' => '57.41,21.62',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Klaipeda',
                'weather_city_id' => '55.69,21.13',
                'country_id'      => $lithuania_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Kaunas',
                'weather_city_id' => '54.88,23.94',
                'country_id'      => $lithuania_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Vilnius',
                'weather_city_id' => '54.69,25.25',
                'country_id'      => $lithuania_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Jelgava',
                'weather_city_id' => '56.64,23.72',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Viljandi',
                'weather_city_id' => '58.34,25.58',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Kuressaare',
                'weather_city_id' => '58.23,22.50',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Võru',
                'weather_city_id' => '57.85,27.03',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Haapsalu',
                'weather_city_id' => '58.92,23.55',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Aluksne',
                'weather_city_id' => '57.41,27.05',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Tukums',
                'weather_city_id' => '56.96,23.14',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Otepää',
                'weather_city_id' => '58.06,26.50',
                'country_id'      => $estonia_id,
            ]
        )->save();
    }
}
