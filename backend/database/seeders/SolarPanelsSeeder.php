<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Products\SolarPanel;

class SolarPanelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createdAt = Carbon::now();

        $solarPanels = [
            [
                'brand' => 'Panasonic',
                'model' => 'VBHN325SJ47',
                'max_power' => 325,
                'efficiency' => 19.7,
                'image' => 'Panasonic_VBHN325SJ47',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'BenQ',
                'model' => 'SunForte PM096B00 335W',
                'max_power' => 335,
                'efficiency' => 20.6,
                'image' => 'BenQ_SunForte_PM096B00-335W',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'BenQ',
                'model' => 'PM060MW2-300W',
                'max_power' => 300,
                'efficiency' => 18.4,
                'image' => 'BenQ_SunVivo_PM060MW2-300W',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'BenQ',
                'model' => 'SunVivo PM060MB2-300W',
                'max_power' => 300,
                'efficiency' => 18.4,
                'image' => 'BenQ_SunVivo_PM060MB2-300W',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'LG',
                'model' => 'Neon R LG360Q1C-A5',
                'max_power' => 370,
                'efficiency' => 20.8,
                'image' => 'LG_Neon_R_LG360Q1C-A5',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'LG',
                'model' => 'MonoX Plus LG300S1C-A5',
                'max_power' => 300,
                'efficiency' => 17.5,
                'image' => 'LG_MonoX_Plus_LG300S1C-A5',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Sharp',
                'model' => 'NU-AF370',
                'max_power' => 370,
                'efficiency' => 19.0,
                'image' => 'Sharp_NU-AF370',
                'created_at' => $createdAt,
            ],
        ];

        SolarPanel::insert($solarPanels);
    }
}
