<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Walikelas;
use App\Models\Detailpelanggaran;
use Illuminate\Support\Facades\Auth;

class WalikelasController extends Controller
{
    public function students()
    {
        $user_id = Auth::user()->id;
        $nip = Walikelas::where('user_id',$user_id)->get()->first()->nip;
        $kelas_id =  kelas::where('nip_guru',$nip)->get()->first()->id;
        $datasiswa =  Siswa::where('kelas_id',$kelas_id)->get();
        return view('pages.walikelas.students',compact('datasiswa'));
    }
    
    public function notifications()
    {
        $user_id = Auth::user()->id;
        $nip = Walikelas::where('user_id',$user_id)->get()->first()->nip;
        $kelas_id =  kelas::where('nip_guru',$nip)->get()->first()->id;
        $history_pelanggaran =  Detailpelanggaran::all();
        $data = [];
        foreach($history_pelanggaran as $hp){
           if($hp->siswa->kelas_id == $kelas_id){
            $data[] = $hp;
          
            }
        }

        return view("pages/walikelas/notifications", compact('data'));
    }
}
