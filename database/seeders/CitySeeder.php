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
                'weather_city_id' => '59.436962,24.753574',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Pärnu',
                'weather_city_id' => '58.387260,24.497351',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Tartu',
                'weather_city_id' => '58.370850,26.714720',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Narva',
                'weather_city_id' => '59.379692,28.179075',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Kärdla',
                'weather_city_id' => '58.99707468965929,22.748511280851794',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Riga',
                'weather_city_id' => '56.949650,24.105186',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Jurmala',
                'weather_city_id' => '56.95435818903581,23.78499761877042',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Liepaja',
                'weather_city_id' => '56.52051047227438,21.06038822920987',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Daugavpils',
                'weather_city_id' => '55.884962433780395,26.553552321065823',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Ventspils',
                'weather_city_id' => '57.41281135816507,21.620690966579176',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Klaipeda',
                'weather_city_id' => '55.69347771300378,21.137292526495848',
                'country_id'      => $lithuania_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Kaunas',
                'weather_city_id' => '54.88650505772912,23.91683355697496',
                'country_id'      => $lithuania_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Vilnius',
                'weather_city_id' => '54.67594083348233,25.26948746606019',
                'country_id'      => $lithuania_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Jelgava',
                'weather_city_id' => '56.64569594534712,23.72296751106179',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Viljandi',
                'weather_city_id' => '58.3469546036419,25.574583232692305',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Kuressaare',
                'weather_city_id' => '58.236363702220025,22.50258441051861',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Võru',
                'weather_city_id' => '57.857763771305606,27.047459380309828',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Haapsalu',
                'weather_city_id' => '58.92733979550208,23.554638801673985',
                'country_id'      => $estonia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Aluksne',
                'weather_city_id' => '57.412865113657986,27.057979924221385',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Tukums',
                'weather_city_id' => '56.96823075311089,23.144337589123392',
                'country_id'      => $latvia_id,
            ]
        )->save();
        City::make(
            [
                'name'            => 'Otepää',
                'weather_city_id' => '58.0642640941599,26.51091164082059',
                'country_id'      => $estonia_id,
            ]
        )->save();
    }
}
