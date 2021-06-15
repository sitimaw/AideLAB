<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Support\Str;
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
        $matakuliah = [
            'INF206' => 'Rekayasa Perangkat Lunak',
            'INF210' => 'Sistem Informasi Geografis',
            'INF218' => 'Struktur Data dan Algoritma',
            'INF220' => 'Komunikasi Data',
            'INF222' => 'Pemrograman Berbasis Web',
        ];

        $kelas = ['A', 'B', 'C'];
        
        foreach ($matakuliah as $kd_mk => $nama) {
            foreach ($kelas as $k) {
                Matakuliah::create([
                    'kd_mk' => $kd_mk,
                    'nama' => $nama,
                    'kelas' => $k,
                    'slug' => Str::slug("$nama $k")
                ]);
            }
        }
    }
}
