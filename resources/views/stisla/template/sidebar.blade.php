
<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#" style="font-family: 'Viga', sans-serif;font-size:16px;">SMKN 1 SURABAYA</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><img src="image/logo.png" alt="" width="30px"></a>
          </div>
          <ul class="sidebar-menu">
              @siswa
              <li class="menu-header">SISWA</li>
              <li class="active"><a class="nav-link" href="/siswa/dashboard"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="/siswa/score"><i class="fas fa-folder-open"></i><span>Score Report</span></a></li>
              @endsiswa
              @admin
              <li class="menu-header">ADMIN</li>
              <li class="active"><a class="nav-link" href="/admin/dashboard"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Students</span></a>
                <ul class="dropdown-menu">
                <li><a class="nav-link" href="/admin/masterkelas">Daftar Kelas</a></li>
                  <li><a class="nav-link" href="/admin/masterscore">Score</a></li>
                </ul>
              </li>
              
              <li><a class="nav-link" href="/admin/listpelanggaran"><i class="fas fa-list-ol"></i> <span>List Pelanggaran</span></a></li>
              @endadmin
               @walikelas
              <li class="menu-header">WALIKELAS</li>
              <li class="active"><a class="nav-link" href="blank.html"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li ><a class="nav-link" href="blank.html"><i class="fas fa-user"></i> <span>Students</span></a></li>
              <li ><a class="nav-link" href="/walikelas/notifications"><i class="far fa-bell"></i> <span>Notifications</span></a></li>
              @endwalikelas
            </ul>
        </aside>
      </div>