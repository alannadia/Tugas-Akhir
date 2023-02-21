<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pelanggaran;
use App\Models\DetailPelanggaran;

class MasterScoreController extends Controller  
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        $detailpelanggaran = DetailPelanggaran::all();
        return view('pages.Admin.MasterScore',compact('detailpelanggaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        $pelanggaran = Pelanggaran::all();
        return view('pages.Admin.CreateScore',compact('siswa','pelanggaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // total score pada model siswa
        $pelanggaran = Pelanggaran::find($request->pelanggaran_id)->score;
        $siswascore = Siswa::where('nisn', $request->nisn)->first()->score;
        $siswaid = Siswa::where('nisn', $request->nisn);

        DetailPelanggaran::create([
            'nisn' => $request->nisn,
            'pelanggaran_id' => $request->pelanggaran_id,
            'tanggal' => $request->tanggal,     
            'remain_score' => $siswascore + $pelanggaran
        ]);

        $siswaid->update([
            'score' =>  $siswascore + $pelanggaran
        ]);

        return redirect('/admin/masterscore')->with('pesan','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggaran = Pelanggaran::all();
        $data = DetailPelanggaran::find($id);
        return view('pages.Admin.EditScore',compact('pelanggaran','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nisn = Siswa::where('nisn', $request->nisn)->first();
        $oldtotalscore = $nisn->score;
        $detailpelanggaran = DetailPelanggaran::find($id);
        $oldscore = $detailpelanggaran->pelanggaran->score;
        $newscore = Pelanggaran::find($request->pelanggaran_id)->score;
        $detailpelanggaran->update([
            'pelanggaran_id' => $request->pelanggaran_id,
            'tanggal' => $request->tanggal,
            'remain_score' => $oldtotalscore - $oldscore + $newscore
        ]);
        $nisn->update([
            'score' => $detailpelanggaran->remain_score
        ]);

        return redirect('/admin/masterscore')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailpelanggaran = DetailPelanggaran::find($id);
        $nisn = Siswa::where('nisn', $detailpelanggaran->nisn )->first();
        $hasil = $nisn->score - $detailpelanggaran->pelanggaran->score;
        $nisn->score = $hasil;
        $nisn->update();
        
        $detailpelanggaran->delete();
        return redirect('/admin/masterscore')->with('pesan','Data berhasil dihapus');
    }
}
