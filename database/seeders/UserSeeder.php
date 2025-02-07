<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create(); //Inisialisasi fakerphp untuk pembuatan data palsu

        $unitIds = Unit::all()->pluck('id'); // Mengambil data id pada model Unit

        for ($i = 0; $i < 10; $i++) {
            $dataUser = [
                'id' => $faker->unique()->uuid(),
                'unit_id' => $faker->randomElement($unitIds),
                'name' => $faker->name(),
                'username' => $faker->userName(),
                'password' => Hash::make('password'),
                'join_date' => $faker->dateTimeBetween('now','+2 weeks'),
                'created_at' => $faker->dateTimeBetween('-2 weeks','now'),
            ];
            DB::table('users')->insert($dataUser);
        }
    }
}
