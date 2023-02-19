<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kelas;
use App\Models\DetailPelanggaran;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nisn',
        'kelas_id',
        'user_id',
        'jenis_kelamain',
        'email',
        'no_telp',
        'foto'
    ];
    protected $table = 'siswa';
    protected $primaryKey = 'nisn';

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
    public function detailpelanggaran(){
        return $this->hasMany(DetailPelanggaran::class, 'nisn', 'nisn');
    }
}
