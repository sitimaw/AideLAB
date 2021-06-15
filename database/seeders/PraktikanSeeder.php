<?php

namespace Database\Seeders;

use App\Models\Praktikan;
use Illuminate\Database\Seeder;

class PraktikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $praktikan = [
            '2008107010001' => 'Farida Mandani',
            '2008107010002'	=> 'Muhammad Rudy Hidayat',
            '2008107010003' => 'Cut Nadilla Maretna',
            '2008107010005' => 'Nadia Rimawati',
            '2008107010007' => 'Maulidya Amanda Putri',
            '2008107010008' => 'Putri Nashuha',
            '2008107010010' => 'Yulia Khairunnisa',
            '2008107010012' => 'Rizka Nuzulia',
            '2008107010013' => 'Daffa Mudhaffar',
            '2008107010014' => 'Rahmi Najla',
            '2008107010017' => 'Yunita Yulianda',
            '2008107010020' => 'M. Ikhsan Fikri',
            '2008107010021' => 'Naufal Alkhalis',
            '2008107010024' => 'Iftahul Fadhlan',
            '2008107010025' => 'Faris Rasyid',
            '2008107010031' => 'Muhammad Raja Furqan',
            '2008107010032' => 'Dhafa Aryanda',
            '2008107010034' => 'Muhammad Rizky Hidayah Akbar',
            '2008107010035' => 'Aditya Rosiadi',
            '2008107010036' => 'Athaya Dzakiyya',
            '2008107010039' => 'Ok Anugrah Adam',
            '2008107010041' => 'Ahmad Chairiansyah',
            '2008107010042' => 'Sitti Tsarwa Akin',
            '2008107010047' => 'Muhammad Faridz Alhafiz',
            '2008107010051' => 'Rania Shafia Khuzai',
            '2008107010053' => 'Ainal Fajri Malahayati',
            '2008107010055' => 'Shyva Annisa Hazainu',
            '2008107010062' => 'Farrah Fahira Murzani',
            '2008107010068' => 'Rusyda Amalia',
            '2008107010071' => 'Teuku Tamam Al Fatah',
            '2008107010073' => 'Ulfa Rahmah',
            '2008107010075' => 'Maghfirah ZA',
            '2008107010079' => 'Muhammad Suhail Haritsah',
            '2008107010099' => 'Putri Aulia Mentari',
            '2008107010101' => 'Hadafee Mudo'
        ];

        $counter=0;
        foreach ($praktikan as $npm => $nama) {
            $counter++;
            $p = Praktikan::create([
                'npm' => $npm,
                'nama' => $nama
            ]);

            if ($counter <= 12) {
                for ($i=1; $i <= 15; $i+=3) { 
                    $p->praktikum()->attach($i);
                }
            } elseif ($counter <= 22) {
                for ($i=2; $i <= 15; $i+=3) { 
                    $p->praktikum()->attach($i);
                }
            } else {
                for ($i=3; $i <= 15; $i+=3) { 
                    $p->praktikum()->attach($i);
                }
            }
        }
    }
}
