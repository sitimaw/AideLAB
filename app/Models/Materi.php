<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'Jadwal';
    protected $fillable = ['id_prak', 'judul', 'nama_file', 'path_file', 'ukuran_file', 'extension_file'];
}
