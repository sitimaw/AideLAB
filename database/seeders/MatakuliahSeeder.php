<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matakuliah::create([
            'kd_mk' => 'INF206',
            'nama' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'A'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF206',
            'nama' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'B'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF206',
            'nama' => 'Rekayasa Perangkat Lunak',
            'kelas' => 'C'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF210',
            'nama' => 'Sistem Informasi Geografis',
            'kelas' => 'A'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF210',
            'nama' => 'Sistem Informasi Geografis',
            'kelas' => 'B'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF210',
            'nama' => 'Sistem Informasi Geografis',
            'kelas' => 'C'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF218',
            'nama' => 'Struktur Data dan Algoritma',
            'kelas' => 'A'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF218',
            'nama' => 'Struktur Data dan Algoritma',
            'kelas' => 'B'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF218',
            'nama' => 'Struktur Data dan Algoritma',
            'kelas' => 'C'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF220',
            'nama' => 'Komunikasi Data',
            'kelas' => 'A'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF220',
            'nama' => 'Komunikasi Data',
            'kelas' => 'B'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF220',
            'nama' => 'Komunikasi Data',
            'kelas' => 'C'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF222',
            'nama' => 'Pemrograman Berbasis Web',
            'kelas' => 'A'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF222',
            'nama' => 'Pemrograman Berbasis Web',
            'kelas' => 'B'
        ]);

        Matakuliah::create([
            'kd_mk' => 'INF222',
            'nama' => 'Pemrograman Berbasis Web',
            'kelas' => 'C'
        ]);
    }
}
