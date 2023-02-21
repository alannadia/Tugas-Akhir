<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPelanggaran;

class NotificationsController extends Controller
{
    public function walikelas()
    {
        // $notifsiswa = DetailPelanggaran::has('kelas')->get()->sortByDesc('cart.create_at');
        // dd($siswa);
        return view("pages/walikelas/notifications");
    }
}
