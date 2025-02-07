<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoginLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $userIds = User::all()->pluck('id');

        for ($i=0; $i < 200 ; $i++) { 
            
            $data = [
                
                'user_id' => $faker->randomElement($userIds),

                'login_time' => $faker->dateTimeBetween('-4 weeks','+2 days')
            
            ];

            DB::table('login_logs')->insert($data);
        }
    }
}
