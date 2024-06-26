 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= BASEURL; ?>Admin">Home</a></li>
              <li class="breadcrumb-item active"><a href="https://polmed.ac.id/">Politeknik Negeri Medan</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box "style="background-color:#7f4ca5">
              <div class="inner">
              <?php foreach ($data['total_anggota'] as $total_anggota): ?>
                  <h3><?= $total_anggota['total_anggota']; ?></h3>
              <?php endforeach; ?>


                <p>Anggota</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color:#b57edc">
              <div class="inner">
              <?php foreach ($data['total_buku'] as $total_buku): ?>
                  <h3><?= $total_buku['total_buku']; ?></h3>
              <?php endforeach; ?>

                <p>Buku</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box"style="background-color:#dbb6ee">
              <div class="inner">
              <?php foreach ($data['total_peminjaman'] as $total_peminjaman): ?>
                  <h3><?= $total_peminjaman['total_peminjaman']; ?></h3>
              <?php endforeach; ?>

                <p>Peminjaman</p>
              </div>
              <div class="icon">
                <i class="ion ion-arrow-up-c"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color:#fff0ff">
              <div class="inner">
              <?php foreach ($data['total_denda'] as $total_denda): ?>
                  <h3><?= 'Rp' . number_format($total_denda['total_denda'], 0, ',', '.'); ?></h3>
              <?php endforeach; ?>


                <p>Total Uang Denda</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- Main row -->
        <section class="content">
  <div class="container">
    <!-- Gambar -->
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <img src="<?= BASEURL; ?>image/logo.png" class="img-fluid" alt="Gambar Perpustakaan" style="max-width: 200px;">
      </div>
    </div>

    <!-- Tulisan -->
    <div class="row justify-content-center ">
      <div class="col-md-6 text-center">
        <h2 class="fw-semibold">Perpustakaan</h2>
        <h4 class="fs-3">Dan Arsip Politeknik Negeri Medan</h4>
      </div>
    </div>
  </div><!-- /.container -->
</section>


        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->