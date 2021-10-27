<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i <= 2 ; $i++) {
            DB::table('kandidat')->insert([
                'nama' => $faker->name(),
                'visi' => $faker->text(),
                'misi' => $faker->text(),
                'foto' => 'test',
                'jumlah_suara' => 0
            ]);
        }
    }
}
