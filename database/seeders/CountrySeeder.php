<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Country::make(
            [
                'name'          => 'Estonia',
                'language_code' => 'et',
            ]
        )->save();
        Country::make(
            [
                'name'          => 'Latvia',
                'language_code' => 'lv',
            ]
        )->save();
        Country::make(
            [
                'name'          => 'Lithuania',
                'language_code' => 'lt',
            ]
        )->save();
    }
}
