<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = Dosen::create([
            'nip' => '197203181995121001',
            'nama' => 'Rahmad Dawood, S.Kom, M.Sc., IPM',
            'no_hp' => '0811317690',
            'email' => 'rahmad_dawood@unsyiah.ac.id',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $dosen->matakuliah()->attach(1);
        $dosen->matakuliah()->attach(2);
        $dosen->matakuliah()->attach(3);

        $dosen = Dosen::create([
            'nip' => '197212261992011001',
            'nama' => 'Ardiansyah, BSEE.,M.Sc',
            'no_hp' => '081264849456',
            'email' => 'ardiansyah@unsyiah.ac.id',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $dosen->matakuliah()->attach(4);
        $dosen->matakuliah()->attach(5);
        $dosen->matakuliah()->attach(6);

        $dosen = Dosen::create([
            'nip' => '196905291994031002',
            'nama' => ' Zahnur, S.Si, M.Info Tech',
            'no_hp' => '081377179696',
            'email' => 'zahnur@unsyiah.ac.id',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $dosen->matakuliah()->attach(7);
        $dosen->matakuliah()->attach(8);
        $dosen->matakuliah()->attach(9);

        $dosen = Dosen::create([
            'nip' => '197705082003121003',
            'nama' => 'Muhd. Iqbal, S.Si, M.Kom',
            'no_hp' => '08126900320',
            'email' => 'iqbal@unsyiah.ac.id',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $dosen->matakuliah()->attach(10);
        $dosen->matakuliah()->attach(11);
        $dosen->matakuliah()->attach(12);

        $dosen = Dosen::create([
            'nip' => '198003262014041001',
            'nama' => 'Kurnia Saputra, S.T., M.Sc',
            'no_hp' => '081360042492',
            'email' => 'kurnia@unsyiah.ac.id',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $dosen->matakuliah()->attach(13);
        $dosen->matakuliah()->attach(14);
        $dosen->matakuliah()->attach(15);
    }
}
