<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $userIds = User::all()->pluck('id');

        $positionIds = Position::all()->pluck('id');

        for ($i=0; $i < 40 ; $i++) { 
            
            $data = [

                'user_id' => $faker->randomElement($userIds),
                
                'position_id' => $faker->randomElement($positionIds),
            
            ];
            
            DB::table('user_positions')->insert($data);
        }
    }
}
