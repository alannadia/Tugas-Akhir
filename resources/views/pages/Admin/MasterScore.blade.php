@extends('stisla.parent')
@section('title','Score Siswa')
@section('content')
<div class="col-12">
    <div class="card">
    <div class="card-header">
      <div class="col-9">
        <a class="btn btn-success " href="{{route('masterscore.create')}}">Tambah Siswa</a>
      </div>
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
        <div class="table-responsive  table table-striped">
        <div id="table-1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
            <thead>
                <th>No</th>
                <th>Nisn</th>
                <th style="width: 150px!important;">Nama</th>
                <th>Kelas</th>
                <th>Tanggal</th>
                <th>Score</th>
                <th>Keterangan</th>
                <th width="150px">Action</th>
            </thead>
            <tbody>  
            <?php $i=1;?>
            @foreach( $detailpelanggaran as $dt )
            <tr>
                <td><?= $i++; ?></td>
                <td>{{ $dt->nisn }}</td>
                <td>{{ $dt->siswa->nama }}</td>
                <td>{{ $dt->siswa->kelas->kelas }}</td>
                <td>{{ $dt->tanggal }}</td>
                <td><div class="badge badge-<?php if($dt->pelanggaran->score <= 55){ echo"success"; }elseif($dt->pelanggaran->score > 55 && $dt->pelanggaran->score <=149){ echo"warning";}elseif($dt->pelanggaran->score > 149 && $dt->pelanggaran->score <=250){ echo"danger";} ?>">{{ $dt->pelanggaran->score }}</div></td>
                <td>{{ $dt->pelanggaran->bentuk_pelanggaran }}</td>
                <td>
                <!-- <a href="{{ route('masterscore.edit', $dt->id )}}" class="btn btn-warning btn-circle"><i class="fas fa-user-edit"></i></a> -->
                <form action="{{ route('masterscore.destroy', $dt->id) }}" method="post">
                @csrf {{ method_field('DELETE') }}
                <button class="btn btn-danger btn-circle" type="submit"><i class="fas fa-trash-alt"></i></button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table-1_previous"><a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
        </div>
    </div>
    </div>
</div>
@endsection