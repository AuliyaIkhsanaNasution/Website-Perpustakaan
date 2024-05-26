 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Anggota</h1>

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

<form class="row g-3" action="<?= BASEURL; ?>/Anggota/ubahanggota" method="post" enctype="multipart/form-data">
  <input type="hidden" name="nim" value="<?= $data['anggota']['nim'] ?>">
  <input type="hidden" name="gambarLama" value="<?= $data['anggota']['gambar'] ?>">

  
  <div class="col-md-6">
    <label for="nim" class="form-label">NIM Mahasiswa</label>
    <input type="number" class="form-control border border-primary-subtle border-2" id="nim" name="nim" value="<?= $data['anggota']['nim'] ?>" readonly>
  </div>
  <div class="col-md-6">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control border border-primary-subtle border-2" id="nama" name="nama" value="<?= $data['anggota']['nama'] ?>">
  </div>
  <div class="col-12">
    <label for="gambar" class="form-label">Gambar :</label>
    <img class="border rounded ml-3" style="width: 100px;" src="<?= BASEURL; ?>/uploads/<?= $data['anggota']['gambar']; ?>" alt="">
    <input type="file" class="form-control" id="gambar" name="gambar">
  </div>
  <div class="col-md-6">
    <label for="prodi" class="form-label">Program Studi</label>
    <input type="text" class="form-control border border-primary-subtle border-2" id="prodi" name="prodi" value="<?= $data['anggota']['prodi'] ?>">
  </div>
  <div class="col-md-6">
    <label for="kelas" class="form-label">Kelas</label>
    <input type="text" class="form-control border border-primary-subtle border-2" id="kelas" name="kelas" value="<?= $data['anggota']['kelas'] ?>">
  </div>
  <div class="col-12">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control border border-primary-subtle border-2" id="alamat" name="alamat" value="<?= $data['anggota']['alamat'] ?>">
  </div>

  <div class="col-6">
    <a href="<?= BASEURL; ?>/Anggota" type="button" class="btn btn-secondary">Kembali</a>
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