@extends('stisla.parent')
@section('title','Dashboard')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
         
        <div class="card">
                <div class="card-header">
                  <h4 class="d-inline">History</h4>
                </div> <!-- card-header -->    
                <div class="card-body" style="overflow:auto;">
                  <ul class="list-unstyled list-unstyled-border">
                    @foreach($data as $d)
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-5.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-<?php if($d->remain_score <= 55){ echo"success"; }elseif($d->remain_score > 55 && $d->remain_score <=149){ echo"warning";}elseif($d->remain_score > 149 && $ds->remain_score <=250){ echo"danger";} ?> mb-1 float-right">Remain Score : {{ $d->remain_score }}</div>
                        <h6 class="media-title"><a href="#">{{ $d->siswa->nama }}</a></h6>
                        <div class="text-small text-muted">{{ $d->pelanggaran->bentuk_pelanggaran }} | <span class="text-danger">{{ $d->tanggal }}</span></div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div> <!-- card-body -->    
         </div> <!-- card -->    

    </div> <!-- row -->
</div> <!-- container-fluid -->

            
@endsection