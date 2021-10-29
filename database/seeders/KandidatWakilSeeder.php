<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class KandidatWakilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $kandidat = [
            'nama' => 'Gabriela Putri',
            'visi' => $faker->text(),
            'misi' => $faker->text(),
            'foto' => '/storage/images/wakil-hero-1.svg'
        ];

        $kandidat2 = [
            'nama' => 'Gabriel Putra',
            'visi' => $faker->text(),
            'misi' => $faker->text(),
            'foto' => '/storage/images/wakil-hero-2.svg'
        ];

        DB::table('kandidat_wakil')->insert($kandidat);
        DB::table('kandidat_wakil')->insert($kandidat2);

        // for ($i=1; $i <= 2 ; $i++) {
        //     DB::table('kandidat_wakil')->insert([
        //         'nama' => $faker->name(),
        //         'visi' => $faker->text(),
        //         'misi' => $faker->text(),
        //         'foto' => 'test',
        //         'jumlah_suara' => 0
        //     ]);
        // }
    }
}
