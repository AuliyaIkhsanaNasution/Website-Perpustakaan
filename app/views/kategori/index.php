 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Data Kategori Buku</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= BASEURL; ?>Kategori">Data Kategori Buku</a></li>
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
      <form action="<?= BASEURL; ?>/Kategori/Cari" method="post">
        <div class="input-group">
          <button class="btn btn-outline-secondary btn-primary text-white" type="submit" id="tombolcari">Cari</button>
          <input type="text" class="form-control border-primary-subtle border-2" placeholder="Cari Nama Kategori..." name="keyword" id="keyword" autocomplete="off">
        </div>
        </form>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formkategori">
          + Tambah Data Kategori
        </button>
      </div>
    </div>
  </div>


<div class="container-fluid">
    <table class="table" >
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori Buku</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $num = 1; // Inisialisasi counter ?>
          <?php foreach ( $data['kategori'] as $kategori ) : ?>
              <tr>
                  <td><?= $num++; ?></td>
                  <td><?= $kategori['kategori'] ?></td>
                  <td>

                  <a href="<?= BASEURL; ?>Kategori/Hapus/<?= $kategori['id_kategori'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>

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

  <!-- modal tambah -->
    <div class="modal fade" id="formkategori" tabindex="-1" aria-labelledby="formkategorilabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formkategorilabel">Tambah Data Kategori</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
            <form action="<?= BASEURL; ?>/Kategori/Tambah" method="post" enctype="multipart/form-data">

              <div class="mb-3">
                <label for="kategori" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control border border-2 border-primary-subtle " id="kategori" name="kategori" placeholder="Bisnis">
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Tambah Data Kategori</button>

        </form>
      </div>
    </div>
  </div>
</div>

