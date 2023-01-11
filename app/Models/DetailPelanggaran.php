<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
