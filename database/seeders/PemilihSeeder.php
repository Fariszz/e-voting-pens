<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class PemilihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 20 ; $i++) {
            DB::table('pemilih')->insert([
                'nim' => $faker->numerify('##########'),
                'password' => Hash::make('password'),
                'status' => $faker->randomElement([1, 2])
            ]);
        }
    }
}
