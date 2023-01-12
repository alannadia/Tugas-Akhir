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
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tr>
              <th>No</th>
              <th width="300px">Keterangan Pelanggaran</th>
              <th>Score</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Tidak membawa buku penghubung dan kartu pelajar</td>
              <td><div class="badge badge-success">10</div></td>
              <td>
                <a href="#" class="btn btn-warning btn-circle"><i class="fas fa-user-edit"></i></a>
                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
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
        <form method="POST" action="{{ route('listpelanggaran.store') }}">
        <div class="form-group">
          <label>Keterangan Pelanggaran</label>
          <input type="text" class="form-control" name="keterangan">
        </div>
        <div class="form-group">
          <label>Score</label>
          <input type="number" class="form-control" value="0" name="score">
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