<?php

namespace Database\Seeders;

use App\Models\Aslab;
use Illuminate\Database\Seeder;

class AslabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aslab = Aslab::create([
            'npm' => '1908107010031',
            'nama' => 'Siti Mawaddah',
            'no_hp' => '082214427795',
            'email' => 'siti.wadd@mhs.unsyiah.ac.id',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        $aslab->matakuliah()->attach(1);
        $aslab->matakuliah()->attach(3);
        $aslab->matakuliah()->attach(5);

        $aslab = Aslab::create([
            'npm' => '1908107010028',
            'nama' => 'Sulthan Uden',
            'no_hp' => '0822407892233',
            'email' => 'zaidan@mhs.unsyiah.ac.id',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        $aslab->matakuliah()->attach(2);
        $aslab->matakuliah()->attach(4);
        $aslab->matakuliah()->attach(5);
    }
}
