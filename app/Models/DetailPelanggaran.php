<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Pelanggaran;

class DetailPelanggaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'pelanggaran_id',
        'tanggal',
        'remain_score'
    ];
    protected $table = 'detail_pelanggaran';
    
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'nisn', 'nisn');
    }
    public function pelanggaran(){
        return $this->belongsTo(Pelanggaran::class, 'pelanggaran_id', 'id');
    }

}
