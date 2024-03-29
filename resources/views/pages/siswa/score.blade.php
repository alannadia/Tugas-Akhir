@extends ("stisla.parent")
@section('title','Score Report')
@section('content')

<div class="row">

    <div class="col-12 col-md-8 col-lg-8">
    <div class="card">
        <div class="card-header">
        <h4>Score Report</h4>
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
            <?php $i=1;?>
            @foreach($pelanggaran_siswa as $ps)
            <tr>
                <td><?= $i++;?></td>
                <td>{{$ps->tanggal}}</td>
                <td><div class="badge badge-<?php if($ps->pelanggaran->score <= 55){ echo"success"; }elseif($ps->pelanggaran->score > 55 && $ps->pelanggaran->score <=149){ echo"warning";}elseif($ps->pelanggaran->score >  149 && $ps->pelanggaran->score <=250){ echo"danger";} ?>">{{$ps->pelanggaran->score}}</div></td>
                <td>{{ $ps->pelanggaran->bentuk_pelanggaran }}</td>
            </tr>
            @endforeach
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
