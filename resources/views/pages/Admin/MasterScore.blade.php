@extends('stisla.parent')
@section('title','Score Siswa')
@section('content')
<div class="col-12">
    <div class="card">
    <div class="card-header">
                    <h4>Data Score Siswa</h4>
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
        <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tanggal</th>
                <th>Score</th>
                <th>Keterangan</th>
                <th>Action</th>
            </thead>
            <tbody>  
            <tr>
                <td>1</td>
                <td>Adinda Jati Mulia</td>
                <td>XII RPL 1</td>
                <td>2018-01-20</td>
                <td><div class="badge badge-danger">200</div></td>
                <td>Berkelahi</td>
                <td>
                <a href="#" class="btn btn-warning btn-circle"><i class="fas fa-user-edit"></i></a>
                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr >
                <td class=>2</td>
                <td>Alan Nadia Bella Sahira</td>
                <td>XII OTKP 2</td>
                <td>2018-01-20</td>
                <td><div class="badge badge-warning">150</div></td>
                <td>Tidak Memakai Atribut Sekolah Lengkap</td>
                <td>
                <a href="#" class="btn btn-warning btn-circle"><i class="fas fa-user-edit"></i></a>
                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>
                <td class=>3</td>
                <td>Bima Wahyu Luckyta</td>
                <td>XII TKJ 3</td>
                <td>2018-01-20</td>
                <td><div class="badge badge-success">100</div></td>
                <td>Terlambat datang ke sekolah</td>
                <td>
                <a href="#" class="btn btn-warning btn-circle"><i class="fas fa-user-edit"></i></a>
                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>
                <td class=>4</td>
                <td>Andrean Firmansyah</td>
                <td>XII MM 4</td>
                <td>2018-01-20</td>
                <td><div class="badge badge-primary">50</div></td>
                <td>Membuang sampah sembarangan</td>
                <td>
                <a href="#" class="btn btn-warning btn-circle"><i class="fas fa-user-edit"></i></a>
                <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
</tbody>
        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table-1_previous"><a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
        </div>
    </div>
    </div>
</div>
@endsection