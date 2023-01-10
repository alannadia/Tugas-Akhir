@extends('stisla.parent')
@section('title','Dashboard')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
         
        <div class="card">
                <div class="card-header">
                  <h4 class="d-inline">Siswa yang sering melanggar</h4>
                </div> <!-- card-header -->    
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-danger mb-1 float-right">120 POINT</div>
                        <h6 class="media-title"><a href="#">Boby anandra</a></h6>
                        <div class="text-small text-muted">XI OTKP 1 <div class="bullet"></div> <span class="text-primary">Now</span></div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-5.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-primary mb-1 float-right">105 POINT</div>
                        <h6 class="media-title"><a href="#">Robet putra</a></h6>
                        <div class="text-small text-muted">XII TKJ 2 <div class="bullet"></div> 4 Min</div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-warning mb-1 float-right">87 POINT</div>
                        <h6 class="media-title"><a href="#">Jamal udin</a></h6>
                        <div class="text-small text-muted">X TKJ 1<div class="bullet"></div> 8 Min</div>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                      <div class="media-body">
                        <div class="badge badge-pill badge-danger mb-1 float-right">50 POINT</div>
                        <h6 class="media-title"><a href="#">Putri safira</a></h6>
                        <div class="text-small text-muted">XI OTKP 4 <div class="bullet"></div> 21 Min</div>
                      </div>
                    </li>
                  </ul>
                </div> <!-- card-body -->    
         </div> <!-- card -->    

        </div><!-- col-lg-6  -->
        <div class="col-lg-6">
        <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                    <i class="far fa-question-circle"></i>
                  </div>
                  <h4>XII RPL 1</h4>
                  <div class="card-description">Tahun Ajaran 2022 - 2023</div>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    <a href="#" class="ticket-item">
                      <div class="ticket-title">
                        <h4>Jumlah Siswa</h4>
                      </div>
                      <div class="ticket-info">
                        <div>37 SISWA</div>
                      </div>
                    </a>
                    <a href="#" class="ticket-item">
                      <div class="ticket-title">
                        <h4>WaliKelas</h4>
                      </div>
                      <div class="ticket-info">
                        <div>Asmuin</div>
                      </div>
                    </a>
                    <a href="features-tickets.html" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
          </div> <!-- card-hero -->
        </div><!-- col-lg-6 -->
    </div> <!-- row -->
</div> <!-- container-fluid -->

            
@endsection