@extends('stisla.parent')
@section('title','Master Siswa')
@section('content')
<div class="row" >
<div class="col-12 col-md-6 col-lg-6">
<div class="card  shadow ">
                  <div class="card-header">
                    <h4>create score siswa</h4>
                  </div>
                    <div class="card-body">
                      <div class="form-row">
                      <div class="form-group">
                      <label>Nisn</label>
                      <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                      </div>
                        <div class="form-group ml-3">
                        <label>Date</label>
                        <input type="date" class="form-control">
                      </div>
                      </div>
                      <div class="form-group">
                        <label>Pelanggaran</label>
                        <select class="form-control form-control-sm">
                          <option>Option 1</option>
                          <option>Option 2</option>
                          <option>Option 3</option>
                        </select>
                      </div>
                    </div>
                      
                    <div class="card-footer">
                    <a class="btn btn-success col-3" href="{{ route('mastersiswa.index') }}">back</a>
                    </div>
</div>
</div>
<div class="card shadow col-lg-5 " >
          <div class="card-body">
              <img src="{{asset ('image/student-icon.jpg')}}" style="width: 200px; height: 200px;" class="mx-auto d-block rounded-circle">
              <div class="mt-3 text-center">
                <h6>Alan Nadia</h6>
                <span>XII RPL 1</span>
              </div>  
              <div class="table-responsive mt-3">
                <table class="w-auto mx-auto">
                  <tbody>
                    <tr><td>NIS</td><td >: 098765</td></tr>
                    <tr><td>Pelanggaran</td><td >: Bekelahi</td></tr>
                    <tr><td>Score</td><td>: 150</td></tr>
                    <tr><td>Tanggal Pelanggaran</td><td>: 17 Agustus 1945</td></tr>
                   </tbody>
                </table>
              </div>
          </div>
          <div class="card-footer">
                  <button class="btn btn-primary">Submit</button>
                  </div>
          </div>

                  </div>
                  </div>

@endsection