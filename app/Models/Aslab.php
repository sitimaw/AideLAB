<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aslab extends Model
{
    use HasFactory;

    protected $table = 'aslab';
    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $fillable = ['npm', 'nama', 'password', 'no_hp', 'email', 'path_foto'];
}
