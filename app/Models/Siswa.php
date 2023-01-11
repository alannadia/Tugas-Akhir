<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'kelas_id',
        'user_id',
        'jenis_kelamain',
        'email',
        'no_telp',
        'foto'
    ];
    protected $table = 'siswa';
}
