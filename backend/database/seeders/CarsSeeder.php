<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Products\Car;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createdAt = Carbon::now();
        $timezone = 'Europe/Amsterdam';

        $cars = [
            [
                'brand' => 'Audi',
                'model' => 'Audi e-tron',
                'battery' => 71,
                'range' => 425,
                'top_speed' => 160,
                'acceleration' => 8.2,
                'motor' => '2x Asynchronous motors',
                'power_consumption' => 16.8,
                'production_start' => Carbon::createFromDate(2018, 1, 1, $timezone),
                'production_end' => 'present',
                'image' => '2020_Audi_e-Tron_Sport_50_Quattro',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Citroen',
                'model' => 'ë-C4',
                'battery' => 50,
                'range' => 350,
                'top_speed' => 150,
                'acceleration' => 9.7,
                'motor' => 'Permanent Magnet Synchronous Motor',
                'power_consumption' => 15.97,
                'production_start' => Carbon::createFromDate(2020, 1, 1, $timezone),
                'production_end' => 'present',
                'image' => 'Citroen_C4_(2020)_IMG_4202',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'DS',
                'model' => 'DS3 Crossback E-Tense Grand Chic',
                'battery' => 50,
                'range' => 332,
                'top_speed' => 150,
                'acceleration' => 9.0,
                'motor' => 'Permanent Magnet Synchronous Motor',
                'power_consumption' => 	17.6,
                'production_start' => Carbon::createFromDate(2018, 1, 1, $timezone),
                'production_end' => 'present',
                'image' => '2019_DS_DS3_Crossback_Performance_Line_PureTech_1.2_Front',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Fiat',
                'model' => '500e La Prima',
                'battery' => 42,
                'range' => 320,
                'top_speed' => 150,
                'acceleration' => 9.0,
                'motor' => 'GKN Automotive G400 IPMS interior permanent-magnet synchronous motor',
                'power_consumption' => 14.4,
                'production_start' => Carbon::createFromDate(2020, 2, 1, $timezone),
                'production_end' => 'present',
                'image' => 'Fiat-500-vorne2',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Honda',
                'model' => 'e Advance ',
                'battery' => 36,
                'range' => 220,
                'top_speed' => 145,
                'acceleration' => 8.1,
                'motor' => 'MCF5 Permanent Magnet Brushless motor',
                'power_consumption' => 18.0,
                'production_start' => Carbon::createFromDate(2020, 1, 1, $timezone),
                'production_end' => 'present',
                'image' => 'Honda_e_Advance_-_f_18102020',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Kona Electric Premium',
                'battery' => 64,
                'range' => 395,
                'top_speed' => 167,
                'acceleration' => 7.6,
                'motor' => 'Permanent Magnet Synchronous Motor',
                'power_consumption' => 14.3,
                'production_start' => Carbon::createFromDate(2017, 1, 1, $timezone),
                'production_end' => 'present',
                'image' => '2019_Hyundai_Kona_Premium_1.0',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Kia',
                'model' => 'EV6 GT-Line ',
                'battery' => 77,
                'range' => 510,
                'top_speed' => 185,
                'acceleration' => 7.7,
                'motor' => 'Permanent magnet synchronous reluctance motor',
                'power_consumption' => 16.5,
                'production_start' => Carbon::createFromDate(2021, 1, 1, $timezone),
                'production_end' => 'present',
                'image' => 'Kia_EV6_Auto_Zuerich_2021_IMG_0161',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Lexus',
                'model' => 'UX 300e Electric Executive ',
                'battery' => 54,
                'range' => 299,
                'top_speed' => 160,
                'acceleration' => 7.7,
                'motor' => '150 kW (201 hp; 204 PS) 4KM synchronous',
                'power_consumption' => 16.9,
                'production_start' => Carbon::createFromDate(2018, 12, 1, $timezone),
                'production_end' => 'present',
                'image' => 'Lexus_UX_250h_IMG_2810',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'EQA 250 Business Solution AMG',
                'battery' => 67,
                'range' => 355,
                'top_speed' => 160,
                'acceleration' => 8.4,
                'motor' => 'PMS permanent magnet E-Motor',
                'power_consumption' => 17.8,
                'production_start' => Carbon::createFromDate(2021, 1, 1, $timezone),
                'production_end' => 'present',
                'image' => 'Mercedes-Benz_H243_IMG_4476',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Polestar',
                'model' => '2 Dual Motor Intro ',
                'battery' => 78,
                'range' => 470,
                'top_speed' => 225,
                'acceleration' => 4.8,
                'motor' => 'EFAD + ERAD',
                'power_consumption' => 19.2,
                'production_start' => Carbon::createFromDate(2019, 1, 1, $timezone),
                'production_end' => 'present',
                'image' => 'Polestar_2_–_f_02042021',
                'created_at' => $createdAt,
            ],
        ];

        Car::insert($cars);
    }
}
