@extends ("stisla.parent")
@section('title','Score Report')
@section('content')

<table class="table table-striped">
  <tr>
    <thead>
        <th>No</th>
        <th>Tanggal</th>
        <th>Score</th>
        <th>Keterangan Pelanggaran</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
    </thead>
</table>
<div class="row">

    <div class="col-12 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-header">
        <h4>Simple Table</h4>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-md">
            <tbody><tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Score</th>
                <th>Keterangan Pelanggaran</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2017-01-09</td>
                <td><div class="badge badge-success">100</div></td>
                <td>Terlambat datang ke sekolah</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2017-01-09</td>
                <td><div class="badge badge-success">150</div></td>
                <td>Tidak Memakai Atribut Sekolah Lengkap</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2017-01-11</td>
                <td><div class="badge badge-danger">200</div></td>
                <td>Berkelahi</td>
</tr>
            </tbody></table>
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
