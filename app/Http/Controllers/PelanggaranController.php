<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;
use App\Models\DetailPelanggaran;

class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Pelanggaran::all();
        return view('pages.Admin.listpelanggaran',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
      $messages = [
            'required' => ':attribute tidak boleh kosong',
            'min' =>  ':attribute tidak boleh kosong',
        ];
        
      $this->validate($request,[
            'keterangan' => 'required',
            'score' => 'required | numeric|min:1'
      ],$messages);

      Pelanggaran::create([
        'bentuk_pelanggaran'=> $request->keterangan,
        'score'=>$request->score
      ]);
      return redirect('/admin/listpelanggaran')->with('pesan', 'Data Berhasil Ditambahkan  ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        $messages = [
          'required' => ':attribute tidak boleh kosong',
          'min' =>  ':attribute tidak boleh kurang dari 1'
        ];
          
        $this->validate($request,[
              'bentuk_pelanggaran' => 'required',
              'score' => 'required | numeric|min:1'
        ],$messages);

      $pelanggaran = Pelanggaran::find($id);
      $pelanggaran->update([
          'bentuk_pelanggaran' =>  $request->bentuk_pelanggaran,
          'score' =>  $request->score
      ]);

      return redirect('/admin/listpelanggaran')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelanggaran::find($id)->delete();
        return redirect('/admin/listpelanggaran')->with('pesan','Data berhasil dihapus');
    }
}
