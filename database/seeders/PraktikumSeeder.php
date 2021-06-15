<?php

namespace Database\Seeders;

use App\Models\Praktikum;
use Illuminate\Database\Seeder;

class PraktikumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Praktikum::create([
            'id_matakuliah' => 1,
            'id_jadwal' => 41
        ]);

        Praktikum::create([
            'id_matakuliah' => 2,
            'id_jadwal' => 42
        ]);

        Praktikum::create([
            'id_matakuliah' => 3,
            'id_jadwal' => 43
        ]);

        Praktikum::create([
            'id_matakuliah' => 4,
            'id_jadwal' => 25
        ]);

        Praktikum::create([
            'id_matakuliah' => 5,
            'id_jadwal' => 26
        ]);

        Praktikum::create([
            'id_matakuliah' => 6,
            'id_jadwal' => 27
        ]);

        Praktikum::create([
            'id_matakuliah' => 7,
            'id_jadwal' => 45
        ]);

        Praktikum::create([
            'id_matakuliah' => 8,
            'id_jadwal' => 46
        ]);

        Praktikum::create([
            'id_matakuliah' => 9,
            'id_jadwal' => 47
        ]);

        Praktikum::create([
            'id_matakuliah' => 10,
            'id_jadwal' => 5
        ]);

        Praktikum::create([
            'id_matakuliah' => 11,
            'id_jadwal' => 6
        ]);

        Praktikum::create([
            'id_matakuliah' => 12,
            'id_jadwal' => 7
        ]);

        Praktikum::create([
            'id_matakuliah' => 13,
            'id_jadwal' => 93
        ]);

        Praktikum::create([
            'id_matakuliah' => 14,
            'id_jadwal' => 94
        ]);

        Praktikum::create([
            'id_matakuliah' => 15,
            'id_jadwal' => 95
        ]);
    }
}
