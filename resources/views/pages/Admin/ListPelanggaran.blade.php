@extends('stisla.parent')
@section('title','List Pelanggaran')
@section('content')

<div class="row">
  <div class="col-12 col-md-8 col-lg-8">
    <div class="card">
      <div class="card-header">
        <h4>List Pelanggaran</h4>
      </div>
      <div class="card-body">

        {{-- alert --}}
        @if (session('pesan'))
        <div class="alert alert-primary ">
        <i class="far fa-lightbulb" style="width:25px;"></i>{{ session('pesan') }}
        </div>
        @endif
        {{-- akhir alert --}}

        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tr>
              <th>No</th>
              <th width="300px">Keterangan Pelanggaran</th>
              <th width="100px">Score</th>
              <th>Action</th>
            </tr>
            <?php $i = 1;?>
            @foreach($data as $item)
            <tr>
              <td><?= $i++;?></td>
              <form action="{{ route('listpelanggaran.update', $item->id)}}" method="POST">
              @csrf {{ method_field('PUT') }}
              <td id="bentukpelanggaran<?= $i ; ?>">{{$item->bentuk_pelanggaran}}</td>
              <td id="bentukpelanggaranform<?= $i ; ?>" style="display:none;"><input class="form-control" type="text" value="{{$item->bentuk_pelanggaran}}" name="bentuk_pelanggaran"></td>
              <td id="score<?= $i ; ?>"><div class="badge badge-<?php if($item->score <= 55){ echo"success"; }elseif($item->score > 55 && $item->score <=149){ echo"warning";}elseif($item->score > 149 && $item->score <=250){ echo"danger";} ?>">{{ $item->score }}</div></td>
              <td id="scoreform<?= $i ; ?>" style="display:none;"><input type="number" class="form-control" min="1" value="{{$item->score}}" name="score"></td>
              <td>
                <button class="btn btn-success" type="submit" id="update<?= $i ; ?>" style="display:none;"><i class="fas fa-check"></i></button>
              </form>
                <button class="btn btn-danger btn-circle" id="cancel<?= $i ; ?>" style="display:none;"  onclick="cancel<?= $i ; ?>()"><i class="fas fa-times"></i></button>
                <button class="btn btn-warning" onclick="edit<?= $i ; ?>()" id="edit<?= $i ; ?>"><i class="fas fa-user-edit"></i></button>
                <form action="{{ route('listpelanggaran.destroy', $item->id)}}" method="POST" class="d-inline">
                @csrf {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger btn-circle" id="hapus<?= $i ; ?>"><i class="fas fa-trash-alt"></i></button>
                </form>
              <script>
              function edit<?= $i ; ?>(){
                document.getElementById("edit<?= $i ; ?>").style.display="none";
                document.getElementById("hapus<?= $i ; ?>").style.display="none";
                document.getElementById("bentukpelanggaran<?= $i ; ?>").style.display="none";
                document.getElementById("score<?= $i ; ?>").style.display="none";
                document.getElementById("update<?= $i ; ?>").style.display="";
                document.getElementById("cancel<?= $i ; ?>").style.display="";
                document.getElementById("bentukpelanggaranform<?= $i ; ?>").style.display="";
                document.getElementById("scoreform<?= $i ; ?>").style.display="";
              }            
              function cancel<?= $i ; ?>(){
                document.getElementById("edit<?= $i ; ?>").style.display="";
                document.getElementById("hapus<?= $i ; ?>").style.display="";
                document.getElementById("bentukpelanggaran<?= $i ; ?>").style.display="";
                document.getElementById("score<?= $i ; ?>").style.display="";
                document.getElementById("update<?= $i ; ?>").style.display="none";
                document.getElementById("cancel<?= $i ; ?>").style.display="none";
                document.getElementById("bentukpelanggaranform<?= $i ; ?>").style.display="none";
                document.getElementById("scoreform<?= $i ; ?>").style.display="none";
              }            
              </script>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4 col-lg-4">
  <div class="card">
      <div class="card-header">
        <h4>Tambah Data</h4>
      </div>
      <div class="card-body">
      
        <form method="post" action="{{ route('listpelanggaran.store') }}">
        @csrf
        <div class="form-group">
          <label>Keterangan Pelanggaran</label>
          <input type="text" class="form-control  <?php if ($errors->first('keterangan') != null){ echo "is-invalid";}else{ echo"";}?>" name="keterangan" value="{{old('keterangan')}}">
          @if($errors->first('keterangan') != null)
          <div class="invalid-feedback">
          {{ $errors->first('keterangan') }}
          </div>
          @endif
        </div>
        <div class="form-group">
          <label>Score</label>
          <input type="number" class="form-control  <?php if ($errors->first('score') != null){ echo "is-invalid";}else{ echo"";}?>" value="0" max="250" min="0" name="score">
           @if($errors->first('score') != null)
          <div class="invalid-feedback">
          {{ $errors->first('score') }}
          </div>
          @endif
        </div>
          <div class="row">
            <button type="submit" class="btn btn-primary" style="width:200px;margin:auto;">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection