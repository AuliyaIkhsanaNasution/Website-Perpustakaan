 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Data Petugas</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= BASEURL; ?>Petugas">Data Petugas</a></li>
              <li class="breadcrumb-item active"><a href="https://polmed.ac.id/">Politeknik Negeri Medan</a></li>
            </ol>
          </div><!-- /.col -->
        </div>
        
<div class="row">
  <div class="col-10">
    <?php flasher::flash(); ?>
  </div>
</div>

<div class="container-fluid">
    <div class="row mb-3">
      <div class="col-md-6">
      <form action="<?= BASEURL; ?>/Petugas/Cari" method="post">
        <div class="input-group">
          <button class="btn btn-outline-secondary btn-primary text-white" type="submit" id="tombolcari">Cari</button>
          <input type="text" class="form-control border-primary-subtle border-2" placeholder="Cari Nama Petugas..." name="keyword" id="keyword" autocomplete="off">
        </div>
        </form>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formpetugas">
          + Tambah Data Petugas
        </button>
      </div>
    </div>
  </div>


<div class="container-fluid">
    <table class="table" >
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Petugas</th>
                <th>Nama Petugas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $num = 1; // Inisialisasi counter ?>
          <?php foreach ( $data['petugas'] as $petugas ) : ?>
              <tr>
                  <td><?= $num++; ?></td>
                  <td><?= $petugas['kode_petugas'] ?></td>
                  <td><?= $petugas['nama'] ?></td>
                  <td><?= $petugas['alamat'] ?></td>
                  <td>

                  <a href="<?= BASEURL; ?>Petugas/FormUbah/<?= $petugas['kode_petugas'] ?>" class="btn btn-sm btn-warning tombolubahPetugas">Edit</a>

                  <a href="<?= BASEURL; ?>Petugas/Hapus/<?= $petugas['kode_petugas'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>

                  </td>
              </tr>
          <?php endforeach; ?>

    </table>
    </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- modal -->

    <div class="modal fade" id="formpetugas" tabindex="-1" aria-labelledby="formpetugaslabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formpetugaslabel">Tambah Data Petugas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
            <form action="<?= BASEURL; ?>/Petugas/Tambah" method="post" enctype="multipart/form-data">

              <div class="mb-3">
                <label for="kode_petugas" class="form-label">Kode Petugas</label>
                <input type="text" class="form-control border border-2 border-primary-subtle " id="kode_petugas" name="kode_petugas" placeholder="P-002">
              </div>

              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control border border-2 border-primary-subtle" id="username" name="username" placeholder="Masukkan username">
              </div>

              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control border border-2 border-primary-subtle" id="nama" name="nama" placeholder="alisya mahardika">
              </div>

              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control border border-2 border-primary-subtle" id="alamat" name="alamat" placeholder="Jl....">
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password untuk login</label> 
                <input type="password" class="form-control border border-2 border-primary-subtle" id="password" name="password" placeholder="xxxx">
              </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Tambah Data Petugas</button>

        </form>
      </div>
    </div>
  </div>
</div>
