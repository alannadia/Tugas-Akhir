<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walikelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'user_id',
        'nama',
        'no_telp',
        'jenis_kelamin',
        'email',
        'foto'
    ];
    protected $table = 'walikelas';
}
