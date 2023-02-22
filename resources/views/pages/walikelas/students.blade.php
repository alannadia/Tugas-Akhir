@extends('stisla.parent')
@section('title','Students')
@section('content')
<div class="row">
<div class="col-12 col-md-12 col-lg-12">
<div class="card">
<div class="card-header">
    <h4>Data Siswa XII RPL 1</h4>
    <div class="card-header-form">
        <form>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-md table-striped">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>NISN</th>
            <th>Total Score</th>
            <th>Action</th>
        </tr>
        <?php $i = 1;?>
        @foreach($datasiswa as $ds)
        <tr>
            <td><?= $i++; ?></td>
            <td>{{ $ds->nama }}</td>
            <td>{{ $ds->nisn }}</td>
            <td><div class="badge badge-<?php if($ds->score <= 55){ echo"success"; }elseif($ds->score > 55 && $ds->score <=149){ echo"warning";}elseif($ds->score > 149 && $ds->score <=250){ echo"danger";} ?>">{{ $ds->score }}</div></td>
            <td><a href="#" class="btn btn-warning" style="margin-right:20px;">Detail</a><a href="#" class="btn btn-success">View Score</a></td>
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
</div>
@endsection