<?php

namespace Database\Seeders;

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
        $this->call(MatakuliahSeeder::class);
        $this->call(AslabSeeder::class);
        $this->call(DosenSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(PraktikumSeeder::class);
    }
}
