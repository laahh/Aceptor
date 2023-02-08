<?php

namespace Database\Seeders;

use App\Models\konstultasi;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SimulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        // User seeder
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('member123')
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            konstultasi::create([
                'name' => 'Team ' . $faker->firstName(),
                'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
                'status' => 'nonaktif',
            ]);
        }
    }
}
