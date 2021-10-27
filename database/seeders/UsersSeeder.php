<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        $admin = [
            'name' => 'Admin',
            'nim' => '001',
            'password' => Hash::make('admin'),
            'email' => 'admin@mail.com',
            'status' => 2,
            'is_admin' => 1
        ];

        DB::table('users')->insert($admin);

        for ($i=1; $i <=30 ; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'nim' => $faker->numerify('##########'),
                'email' => $faker->email(),
                'password' => Hash::make('password'),
                'status' => $faker->randomElement([1, 2]),
            ]);
        }
    }
}
