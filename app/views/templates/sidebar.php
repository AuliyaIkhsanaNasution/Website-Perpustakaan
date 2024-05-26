 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= BASEURL; ?>image/logo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Perpustakaan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= BASEURL; ?>image/profil.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          <?php
        // Ambil nama pengguna dari sesi
        if (isset($_SESSION['username'])) {
          echo $_SESSION['username'];
        } else {
          echo "Administrator";
        }
      ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="<?= BASEURL; ?>Admin" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Tabel Master</li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>Anggota" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Anggota
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>/Petugas" class="nav-link">
              <i class="nav-icon fas fa-users "></i>
              <p>
                Data Petugas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>Buku" class="nav-link">
              <i class="nav-icon fas fa-book "></i>
              <p>
                Data Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>Kategori" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Data Kategori Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>Penerbit" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Data Penerbit Buku
              </p>
            </a>
          </li>
          
          <li class="nav-header">Tabel Transaksi</li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>Peminjaman" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Data Peminjaman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>Admin" class="nav-link">
              <i class="nav-icon fas fa-download "></i>
              <p>
                Data Denda
              </p>
            </a>
          </li>

          <li class="nav-header">Laporan</li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>Admin" class="nav-link">
              <i class="nav-icon fas fa-paperclip"></i>
              <p>
                Laporan Perpustakaan
              </p>
            </a>
          </li>

          <li class="nav-header">Keluar</li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>AuthController/logout" class="nav-link">
              <i class="nav-icon ion ion-log-out"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>