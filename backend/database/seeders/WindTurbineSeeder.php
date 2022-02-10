<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Products\WindTurbine;

class WindTurbineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createdAt = Carbon::now();

        $turbines = [
            [
                'brand' => 'Micon',
                'model' => 'M530',
                'power' => '250kW',
                'height' => '30m',
                'rotor_diameter' => '26m',
                'year' => 1989,
                'image' => 'Micon_M530',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'WindWorld',
                'model' => 'W-2700',
                'power' => '150kW',
                'height' => '30m',
                'rotor_diameter' => '27m',
                'year' => 1990,
                'image' => 'WindWorld_W-2700',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Micon',
                'model' => 'M1500',
                'power' => '600kW',
                'height' => '45m',
                'rotor_diameter' => '43m',
                'year' => 1996,
                'image' => 'Micon_M1500',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'AN Bonus',
                'model' => 'Bonus 150',
                'power' => '150kW',
                'height' => '30m',
                'rotor_diameter' => '23m',
                'year' => 1990,
                'image' => 'AN_Bonus_150kW',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Micon',
                'model' => 'M450',
                'power' => '250kW',
                'height' => '30m',
                'rotor_diameter' => '24m',
                'year' => 1988,
                'image' => 'Micon_M450',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Vestas',
                'model' => 'V25',
                'power' => '200kW',
                'height' => '30m',
                'rotor_diameter' => '25m',
                'year' => 1989,
                'image' => 'Vestas_V25',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Nordtank',
                'model' => '150 XLR',
                'power' => '150kW',
                'height' => '32,5m',
                'rotor_diameter' => '24,6m',
                'year' => 1990,
                'image' => 'Nordtank_150',
                'created_at' => $createdAt,
            ],
            [
                'brand' => 'Micon',
                'model' => 'M750',
                'power' => '400 kW',
                'height' => '36m',
                'rotor_diameter' => '31m',
                'year' => 1995,
                'image' => 'Micon_M750',
                'created_at' => $createdAt,
            ]
        ];

        WindTurbine::insert($turbines);
    }
}
