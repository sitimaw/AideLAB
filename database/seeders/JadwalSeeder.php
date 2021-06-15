<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
        $jam = ['08:15' => '09:55', '10:00' => '11:40', '12:00' => '13:40', '14:00' => '15:40', '16:30' => '18:10'];
        $ruang = ['Lab. Networking', 'Lab. Database', 'Lab. TIK', 'Lab. SIG'];
        foreach ($hari as $h) {
            foreach ($jam as $jam_mulai => $jam_akhir) {
                foreach ($ruang as $r) {                    
                    Jadwal::create([
                        'hari' => $h,
                        'jam_mulai' => $jam_mulai,
                        'jam_akhir' => $jam_akhir,
                        'ruang' => $r,
                        'status'=> false
                    ]);
                }
            }
        }
    }
}
