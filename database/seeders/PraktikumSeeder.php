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
        $praktikum = $praktikum = Praktikum::create([
            'id_matakuliah' => 1,
            'id_jadwal' => 41
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 2,
            'id_jadwal' => 42
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 3,
            'id_jadwal' => 43
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 4,
            'id_jadwal' => 25
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 5,
            'id_jadwal' => 26
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 6,
            'id_jadwal' => 27
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 7,
            'id_jadwal' => 45
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 8,
            'id_jadwal' => 46
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 9,
            'id_jadwal' => 47
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 10,
            'id_jadwal' => 5
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 11,
            'id_jadwal' => 6
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 12,
            'id_jadwal' => 7
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 13,
            'id_jadwal' => 93
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 14,
            'id_jadwal' => 94
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();

        $praktikum = Praktikum::create([
            'id_matakuliah' => 15,
            'id_jadwal' => 95
        ]);
        $praktikum->jadwal->status = 1;
        $praktikum->jadwal->save();
    }
}
