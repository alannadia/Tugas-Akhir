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
            <!-- ISI KONTEN -->
            @yield('content')
            <!-- AKHIR ISI KONTEN -->
          </div>

          <div class="section-body">
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
