<?php

namespace Database\Seeders;

use App\Models\Pemilih;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Pemilih::factory(10)->create();
        $this->call(StatusSeeder::class);
        $this->call(PemilihSeeder::class);
        $this->call(KandidatSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
