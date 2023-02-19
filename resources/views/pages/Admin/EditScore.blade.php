@extends('stisla.parent')
@section('title','Edit Score')
@section('content')
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="card">
      <div class="card-header">
        <h4>Edit Score</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('masterscore.update', $data->id) }}" method="post">
        @csrf 
        {{ method_field('PUT') }}
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nisn</label>
          <div class="col-sm-12 col-md-7 search_select_box">
          <select class="form-select select-primary w-100" data-live-search="true" name="nisn">
            <option data-tokens="ketchup mustard"></option>
            <option value="{{ $data->nisn }}" selected >{{ $data->siswa->nisn }} | {{ $data->siswa->nama }} | {{ $data->siswa->kelas->kelas }}</option>
          </select>
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pelanggaran</label>
          <div class="col-sm-12 col-md-7 search_select_box">
          <select class="form-select select-primary w-100" data-live-search="true" name="pelanggaran_id">
            <option data-tokens="ketchup mustard"></option>
            @foreach($pelanggaran as $p)
            <option value="{{ $p->id }}" <?php if( $p->id == $data->pelanggaran_id){echo"selected";}?>>{{ $p->bentuk_pelanggaran }} </option>
            @endforeach
          </select>
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date</label>
          <div class="col-sm-12 col-md-7">
          <input type="date" class="form-control datepicker" name="tanggal" value="{{ $data->tanggal }}">
          </div>
        </div>
      
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
          <div class="col-sm-12 col-md-7">
            <button class="btn btn-primary">simpan data</button>
          </form>
          <a class="btn btn-danger ml-2" href="{{ route('masterscore.index') }}">cancel</a>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

@endsection