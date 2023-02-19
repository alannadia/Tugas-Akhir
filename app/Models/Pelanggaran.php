<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailPelanggaran;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $fillable = [
       'bentuk_pelanggaran',
       'score'
    ];

    protected $table = 'pelanggaran';
    public function detailpelanggaran(){
        return $this->hasMany(DetailPelanggaran::class, 'pelanggaran_id', 'id');
    }
}
