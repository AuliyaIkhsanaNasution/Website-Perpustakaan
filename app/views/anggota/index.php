 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Data Anggota</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= BASEURL; ?>Anggota">Data Anggota</a></li>
              <li class="breadcrumb-item active"><a href="https://polmed.ac.id/">Politeknik Negeri Medan</a></li>
            </ol>
          </div><!-- /.col -->
        </div>
        
<div class="row">
  <div class="col-6">
    <?php flasher::flash(); ?>
  </div>
</div>

<div class="container-fluid">
    <div class="row mb-3">
      <div class="col-md-6">
      <form action="<?= BASEURL; ?>/Anggota/Cari" method="post">
        <div class="input-group">
          <button class="btn btn-outline-secondary btn-primary text-white" type="submit" id="tombolcari">Cari</button>
          <input type="text" class="form-control border-primary-subtle border-2" placeholder="Cari Nama Anggota..." name="keyword" id="keyword" autocomplete="off">
        </div>
        </form>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formanggota">
          + Tambah Data Anggota
        </button>
      </div>
    </div>
  </div>


<div class="container-fluid">
    <table class="table" >
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Photo</th>
                <th>Nama Lengkap</th>
                <th>Prodi</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $num = 1; // Inisialisasi counter ?>
          <?php foreach ( $data['anggota'] as $anggota ) : ?>
              <tr>
                  <td><?= $num++; ?></td>
                  <td><?= $anggota['nim'] ?></td>
                  <td><img class="rounded " src="<?= BASEURL; ?>uploads/<?= $anggota['gambar'] ?>" alt="" width="70" height="70"></td>
                  <td><?= $anggota['nama'] ?></td>
                  <td><?= $anggota['prodi'] ?></td>
                  <td><?= $anggota['kelas'] ?></td>
                  <td><?= $anggota['alamat'] ?></td>
                  <td>

                  <a href="<?= BASEURL; ?>Anggota/FormUbah/<?= $anggota['nim'] ?>" class="btn btn-sm btn-warning tombolubahanggota">Edit</a>

                  <a href="<?= BASEURL; ?>Anggota/Hapus/<?= $anggota['nim'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>

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

    <div class="modal fade" id="formanggota" tabindex="-1" aria-labelledby="formanggotalabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formanggotalabel">Tambah Data Anggota</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
            <form action="<?= BASEURL; ?>/Anggota/Tambah" method="post" enctype="multipart/form-data">

              <div class="mb-3">
                <label for="nim" class="form-label">NIM Anggota</label>
                <input type="number" class="form-control border border-2 border-primary-subtle " id="nim" name="nim" placeholder="220510xxx">
              </div>

              <div class="mb-3">
                <label for="gambar" class="form-label">Photo</label>
                <input type="file" class="form-control border border-2 border-primary-subtle" id="gambar" name="gambar" placeholder="">
              </div>

              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control border border-2 border-primary-subtle" id="nama" name="nama" placeholder="Sintya">
              </div>

              <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <input type="text" class="form-control border border-2 border-primary-subtle" id="prodi" name="prodi" placeholder="Manajemen Informatika">
              </div>

              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control border border-2 border-primary-subtle" id="kelas" name="kelas" placeholder="MI-4B">
              </div>

              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control border border-2 border-primary-subtle" id="alamat" name="alamat" placeholder="Jl. xxxx xxx">
              </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Tambah Data Anggota</button>

        </form>
      </div>
    </div>
  </div>
</div>
