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
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-5.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-primary mb-1 float-right">105 POINT</div>
                        <h6 class="media-title"><a href="#">Robet putra</a></h6>
                        <div class="text-small text-muted">XII TKJ 2 <div class="bullet"></div> 4 Min</div>
                      </div>
                    </li>
                  </ul>
                </div> <!-- card-body -->    
         </div> <!-- card -->    

    </div> <!-- row -->
</div> <!-- container-fluid -->

            
@endsection