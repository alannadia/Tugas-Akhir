<!DOCTYPE html>
<html lang="en">
<head>
@include('stisla.template.head')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>

      <!-- NAVBAR -->
      @include('stisla.template.navbar')
      <!-- AKHIR NAVBAR -->

      <!-- SIDEBAR -->
      @include('stisla.template.sidebar')
      <!-- AKHIR SIDEBAR -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
          <h4>@yield('title')</h4>
          <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Article</div>
            </div>
          </div>

          <div class="section-body">
             <!-- ISI KONTEN -->
             @yield('content')
            <!-- AKHIR ISI KONTEN -->
          </div>
        </section>
      </div>

      <!-- FOOTER -->
      @include('stisla.template.footer')
      <!-- AKHIR FOOTER -->
    </div>
  </div>

  <!-- SCRIPT -->
  @include('stisla.template.script')
  <!-- AKHIR SCRIPT -->
</body>
</html>
