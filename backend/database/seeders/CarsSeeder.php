<?php

namespace Database\Seeders;

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

        $turbines = [
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
            [
                'type' => '',
                'brand' => '',
                'model' => '',
                'license_plate' => '',
                'image' => '',
                'created_at' => $createdAt,
            ],
        ];

        Car::insert($turbines);
    }
}
