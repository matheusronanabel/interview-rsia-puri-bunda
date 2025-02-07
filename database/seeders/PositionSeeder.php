<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create(); // Inisialisasi fakerphp sebagai variable untuk generate data palsu

        $data = [
            [
                'name' => 'Administrator',
                'created_at' => $faker->dateTimeBetween('-2 weeks', 'now')
            ],
            [
                'name' => 'Dokter Spesialis Jantung',
                'created_at' => $faker->dateTimeBetween('-2 weeks', 'now')
            ],
            [
                'name' => 'Dokter Gigi',
                'created_at' => $faker->dateTimeBetween('-2 weeks', 'now')
            ],
            [
                'name' => 'Asisten Dokter',
                'created_at' => $faker->dateTimeBetween('-2 weeks', 'now')
            ],
            [
                'name' => 'Security',
                'created_at' => $faker->dateTimeBetween('-2 weeks', 'now')
            ],
        ];

        DB::table('positions')->insert($data);
    }
}
