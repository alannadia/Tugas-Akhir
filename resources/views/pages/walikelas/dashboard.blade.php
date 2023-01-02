@extends('stisla.parent')
@section('title','Dashboard')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
         
        <div class="card">
                <div class="card-header">
                  <h4 class="d-inline">Siswa yang sering melanggar</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div> <!-- card-header -->    
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                        <h6 class="media-title"><a href="#">Redesign header</a></h6>
                        <div class="text-small text-muted">XI OTKP 1 <div class="bullet"></div> <span class="text-primary">Now</span></div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-5.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-primary mb-1 float-right">Completed</div>
                        <h6 class="media-title"><a href="#">Add a new component</a></h6>
                        <div class="text-small text-muted">XII TKJ 2 <div class="bullet"></div> 4 Min</div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-warning mb-1 float-right">Progress</div>
                        <h6 class="media-title"><a href="#">Fix modal window</a></h6>
                        <div class="text-small text-muted">Ujang Maman <div class="bullet"></div> 8 Min</div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                        <h6 class="media-title"><a href="#">Remove unwanted classes</a></h6>
                        <div class="text-small text-muted">Farhan A Mujib <div class="bullet"></div> 21 Min</div>
                      </div>
                    </li>
                  </ul>
                </div> <!-- card-body -->    
         </div> <!-- card -->    

        </div><!-- col-lg-6  -->
        <div class="col-lg-6">
            
        </div><!-- col-lg-6 -->
    </div> <!-- row -->
</div> <!-- container-fluid -->

            
@endsection