<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
       'nip_guru',
       'kelas',
       'tahun_ajaran'
    ];
    protected $table = 'kelas';

    public function siswa(){
        return $this->hasMany(Siswa::class, 'kelas_id', 'id');
    }
}
