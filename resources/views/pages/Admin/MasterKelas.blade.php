@extends('stisla.parent')
@section('title','Master Kelas')
@section('content')
<div class="card card-warning">
  <div class="card-header">
    <form class="card-header-form">
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5">Pilih Tahun Ajaran</label>
          <div class="col-sm-12 col-md-7 search_select_box">
          <select class="form-select select-primary w-400" data-live-search="true" name="nisn">
            <option data-tokens="ketchup mustard"></option>
            <option value="" selected >2022-2023</option>
          </select>
          </div>
        </div>
    </form>
  </div> <!-- card header -->
  <div class="card-body mt-4" style="overflow:auto;">
  <div class="row">
    <div class="col-sm-12 col-md-4 mb-4">
      <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
        <div class="hero-inner">
          <h2>12 RPL 1</h2>
          <p class="lead">jumlah siswa : 33</p>
          <p class="lead">walikelas : Asmuin</p>
          <div class="mt-4">
            <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4 mb-4">
      <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
        <div class="hero-inner">
          <h2>12 RPL 1</h2>
          <p class="lead">jumlah siswa : 33</p>
          <p class="lead">walikelas : Asmuin</p>
          <div class="mt-4">
            <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4 mb-4">
      <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
        <div class="hero-inner">
          <h2>12 RPL 1</h2>
          <p class="lead">jumlah siswa : 33</p>
          <p class="lead">walikelas : Asmuin</p>
          <div class="mt-4">
            <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4 mb-4">
      <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="../assets/img/unsplash/andre-benz-1214056-unsplash.jpg">
        <div class="hero-inner">
          <h2>12 RPL 1</h2>
          <p class="lead">jumlah siswa : 33</p>
          <p class="lead">walikelas : Asmuin</p>
          <div class="mt-4">
            <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div> <!-- card body -->
</div> <!-- card -->
@endsection