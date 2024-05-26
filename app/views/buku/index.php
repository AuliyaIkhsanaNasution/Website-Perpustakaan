 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Data Buku</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= BASEURL; ?>Buku">Data Buku</a></li>
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
      <form action="<?= BASEURL; ?>/Buku/Cari" method="post">
        <div class="input-group">
          <button class="btn btn-outline-secondary btn-primary text-white" type="submit" id="tombolcari">Cari</button>
          <input type="text" class="form-control border-primary-subtle border-2" placeholder="Cari Nama Buku..." name="keyword" id="keyword" autocomplete="off">
        </div>
        </form>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formBuku">
          + Tambah Data Buku
        </button>
      </div>
    </div>
  </div>


<div class="container-fluid">
    <table class="table" >
        <thead>
            <tr>
                <th>No</th>
                <th>ISBN</th>
                <th>Gambar Buku</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tanggal Terbit</th>
                <th>Sinopsis</th>
                <th>Stok Buku Tersedia</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $num = 1; // Inisialisasi counter ?>
          <?php foreach ( $data['buku'] as $buku ) : ?>
              <tr>
                  <td><?= $num++; ?></td>
                  <td><?= $buku['isbn'] ?></td>
                  <td><img class="rounded " src="<?= BASEURL; ?>uploads/<?= $buku['gambar_buku'] ?>" alt="" width="70" height="70"></td>
                  <td><?= $buku['judul'] ?></td>
                  <td><?= $buku['kategori'] ?></td>
                  <td><?= $buku['pengarang'] ?></td>
                  <td><?= $buku['nama_penerbit'] ?></td>
                  <td><?= date('d-m-Y', strtotime($buku['tanggal_terbit'])); ?></td>
                  <td><?= $buku['sinopsis'] ?></td>
                  <td><?= $buku['stok_buku'] ?></td>
                  <td><?= $buku['status'] ?></td>
                  <td>

                  <a href="<?= BASEURL; ?>Buku/FormUbah/<?= $buku['isbn'] ?>" class="btn btn-sm btn-warning tombolubahanggota">Edit</a>

                  <a href="<?= BASEURL; ?>Buku/Hapus/<?= $buku['isbn'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>

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

  <div class="modal fade" id="formBuku" tabindex="-1" aria-labelledby="formBukulabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formBukulabel">Tambah Data Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/Buku/Tambah" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="isbn" class="form-label">ISBN Buku</label>
            <input type="text" class="form-control border border-2 border-primary-subtle" id="isbn" name="isbn" placeholder="2168-675-675">
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Buku</label>
            <input type="file" class="form-control border border-2 border-primary-subtle" id="gambar" name="gambar">
          </div>

          <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control border border-2 border-primary-subtle" id="judul" name="judul" placeholder="Legenda Batu Menangis">
          </div>

          <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-control border border-2 border-primary-subtle" id="kategori" name="id_kategori">
            <option value="">--Pilih Kategori--</option>
              <?php foreach($data['kategori'] as $kategori): ?>
                <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['kategori']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control border border-2 border-primary-subtle" id="pengarang" name="pengarang" placeholder="Agnes">
          </div>

          <div class="mb-3">
            <label for="penerbit" class="form-label">Nama Penerbit</label>
            <select class="form-control border border-2 border-primary-subtle" id="penerbit" name="id_penerbit">
                <option value="">--Pilih Penerbit--</option>
              <?php foreach($data['penerbit'] as $penerbit): ?>
                <option value="<?= $penerbit['id_penerbit']; ?>"><?= $penerbit['nama_penerbit']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
            <input type="date" class="form-control border border-2 border-primary-subtle" id="tanggal_terbit" name="tanggal_terbit">
          </div>

          <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control border border-2 border-primary-subtle" id="sinopsis" name="sinopsis" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="stok_buku" class="form-label">Stok Buku</label>
            <input type="number" class="form-control border border-2 border-primary-subtle" id="stok_buku" name="stok_buku" min="1">
          </div>

          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control border border-2 border-primary-subtle" id="status" name="status">
              <option value="tersedia">Tersedia</option>
              <option value="habis dipinjam">Habis Terpinjam</option>
            </select>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Tambah Data Buku</button>
        </form>
      </div>
    </div>
  </div>
</div>

