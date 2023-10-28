<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Language::make(
            [
                'name'       => 'Estonian',
                'code'       => 'et',
                'country_id' => Country::where('name', 'Estonia')->first()->id,
            ]
        )->save();
        Language::make(
            [
                'name'       => 'Latvian',
                'code'       => 'lv',
                'country_id' => Country::where('name', 'Latvia')->first()->id,
            ]
        )->save();
        Language::make(
            [
                'name'       => 'Lithuanian',
                'code'       => 'lt',
                'country_id' => Country::where('name', 'Lithuania')->first()->id,
            ]
        )->save();
    }
}
