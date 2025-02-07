<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create(); //Inisialisasi library faker untuk membuat data palsu.

        $data = [
            [
                'name' => 'Unit 1',
                'created_at' => $faker->dateTimeBetween('-2 weeks','now')
            ],
            [
                'name' => 'Unit 2',
                'created_at' => $faker->dateTimeBetween('-2 weeks','now')
            ],
            [
                'name' => 'Unit 3',
                'created_at' => $faker->dateTimeBetween('-2 weeks','now')
            ],
            [
                'name' => 'Unit 4',
                'created_at' => $faker->dateTimeBetween('-2 weeks','now')
            ],
            [
                'name' => 'Unit 5',
                'created_at' => $faker->dateTimeBetween('-2 weeks','now')
            ],
        ];

        DB::table('units')->insert($data);
    }
}
