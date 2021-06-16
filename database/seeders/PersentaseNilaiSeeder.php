<?php

namespace Database\Seeders;

use App\Models\PersentaseNilai;
use Illuminate\Database\Seeder;

class PersentaseNilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = 1;
        for ($id=1; $id <= 15; $id++) { 
            PersentaseNilai::create([
                'id_praktikum' => $id
            ]);
        }
    }
}
