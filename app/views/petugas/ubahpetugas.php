 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Petugas</h1>

          </div>
          <div class="col-sm-6">
            <!--  -->
          </div><!-- /.col -->
        </div>
        

        
<nav class="navbar navbar-expand-lg mb-2">
  <div class="container-fluid">
    <div class="collapse navbar-collapse justify-content-end">

  </div>
</nav>

<div class="container-fluid">

<form class="row g-3" action="<?= BASEURL; ?>/Petugas/ubahpetugas" method="post">
  <input type="hidden" name="kode_petugas" value="<?= $data['petugas']['kode_petugas'] ?>">

  
  <div class="col-md-6">
    <label for="kode_petugas" class="form-label">Kode Petugas</label>
    <input type="text" class="form-control border border-primary-subtle border-2" id="kode_petugas" name="kode_petugas" value="<?= $data['petugas']['kode_petugas'] ?>" readonly>
  </div>
  <div class="col-md-6">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control border border-primary-subtle border-2" id="nama" name="nama" value="<?= $data['petugas']['nama'] ?>">
  </div>
  <div class="col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control border border-primary-subtle border-2" id="username" name="username" value="<?= $data['petugas']['username'] ?>">
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password Akun</label>
    <input type="text" class="form-control border border-primary-subtle border-2" id="password" name="password" value="<?= $data['petugas']['password'] ?>">
  </div>
  <div class="col-12">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control border border-primary-subtle border-2" id="alamat" name="alamat" value="<?= $data['petugas']['alamat'] ?>">
  </div>

  <div class="col-6">
    <a href="<?= BASEURL; ?>/Petugas" type="button" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Ubah Data</button>
  </div>
</form>


        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->