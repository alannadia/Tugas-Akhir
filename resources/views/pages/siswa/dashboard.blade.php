@extends('stisla.parent')
@section('title','Biodata')
@section('content')

<script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>
    <script type="importmap">
    {
      "imports": {
        "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js",
        "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.esm.min.js"
      }
    }
    </script>
    <script type="module">
      import * as bootstrap from 'bootstrap'

      new bootstrap.Popover(document.getElementById('popoverButton'))
    </script>

<div class="container">`
  <div class="row">
      <div class="col-md-4">
      <div class="card shadow mb-3 " style="height: 500px;" >
          <div class="card-body text-center">
              <img src="{{asset ('image/student-icon.jpg')}}" style="width: 200px; height: 200px;" class="rounded-circle">
              <div class="col mt-3">
              <h6>{{ $data_siswa->nama }}</h6>
              <span>{{$data_siswa->nisn}}</span>
              </div>
          </div>  
          </div>
      </div>
      <div class="col-md-7">
                <div class="card shadow">
                  <div class="card-body">

                  <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
  </li>
</ul>


               </ul>
                 <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                 <table class="table table-responsive">
                       <tbody>
                        <tr><td valign="top"  width="20%">NISN</td><td width="50%">: {{$data_siswa->nisn}}</td></tr>
                        <tr><td valign="top" >Nama</td><td width="50%">: {{$data_siswa->nama}}</td></tr>
                        <tr><td valign="top">Tempat,Tanggal Lahir</td><td width="50%">: 17 Agustus 1945</td></tr>
                        <tr><td valign="top" >Agama</td><td width="50%">: Islam</td></tr>
                        <tr><td valign="top" >Jenis Kelamin</td><td width="50%">: {{$data_siswa->jenis_kelamin}}</td></tr>
                       </tbody>
                    </table>
                 </div>

                 <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <table class="table table-responsive">
                       <tbody>
                        <tr><td valign="top"  width="20%">NIS</td><td width="50%">: 12345678</td></tr>
                        <tr><td valign="top" >Nama</td><td width="50%">: SMKN 1 Surabaya</td></tr>
                        <tr><td valign="top">Tempat,Tanggal Lahir</td><td width="50%">: 17 Agustus 1945</td></tr>
                        <tr><td valign="top" >Agama</td><td width="50%">: Islam</td></tr>
                        <tr><td valign="top" >Jenis Kelamin</td><td width="50%">: Perempuan</td></tr>
                       </tbody>
                    </table>
                    <div>
              
         </div>
                 </div>
                 </div>
                  </div>
          </div>
      </div>
</div>
</div>

@endsection