<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Data Buku</h1>
        </div>
        <div class="col-sm-6">
          <!--  -->
        </div><!-- /.col -->
      </div>
      
      <nav class="navbar navbar-expand-lg mb-2">
        <div class="container-fluid">
          <div class="collapse navbar-collapse justify-content-end">
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        <form class="row g-3" action="<?= BASEURL; ?>/Buku/UbahBuku" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $data['buku']['isbn'] ?>">
          <input type="hidden" name="gambarLama" value="<?= $data['buku']['gambar_buku'] ?>">

          <div class="col-md-6">
            <label for="isbn" class="form-label">ISBN Buku</label>
            <input type="text" class="form-control border border-primary-subtle border-2" id="isbn" name="isbn" value="<?= $data['buku']['isbn'] ?>" readonly>
          </div>

          <div class="col-md-6">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control border border-primary-subtle border-2" id="judul" name="judul" value="<?= $data['buku']['judul'] ?>">
          </div>

          <div class="col-12">
            <label for="gambar" class="form-label">Gambar :</label>
            <img class="border rounded ml-3" style="width: 100px;" src="<?= BASEURL; ?>/uploads/<?= $data['buku']['gambar_buku']; ?>" alt="">
            <input type="file" class="form-control" id="gambar" name="gambar">
          </div>

          <div class="col-md-6">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-control border border-primary-subtle border-2" id="kategori" name="id_kategori">
              <?php foreach($data['kategori'] as $kategori): ?>
                <option value="<?= $kategori['id_kategori']; ?>" <?= $kategori['id_kategori'] == $data['buku']['id_kategori'] ? 'selected' : ''; ?>><?= $kategori['kategori']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-md-6">
            <label for="penerbit" class="form-label">Nama Penerbit</label>
            <select class="form-control border border-primary-subtle border-2" id="penerbit" name="id_penerbit">
              <?php foreach($data['penerbit'] as $penerbit): ?>
                <option value="<?= $penerbit['id_penerbit']; ?>" <?= $penerbit['id_penerbit'] == $data['buku']['id_penerbit'] ? 'selected' : ''; ?>><?= $penerbit['nama_penerbit']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-md-6">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control border border-primary-subtle border-2" id="pengarang" name="pengarang" value="<?= $data['buku']['pengarang'] ?>">
          </div>

          <div class="col-md-6">
            <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
            <input type="date" class="form-control border border-primary-subtle border-2" id="tanggal_terbit" name="tanggal_terbit" value="<?= $data['buku']['tanggal_terbit'] ?>">
          </div>

          <div class="col-md-12">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control border border-primary-subtle border-2" id="sinopsis" name="sinopsis" rows="3"><?= $data['buku']['sinopsis'] ?></textarea>
          </div>

          <div class="col-md-6">
            <label for="stok_buku" class="form-label">Stok Buku</label>
            <input type="number" class="form-control border border-primary-subtle border-2" id="stok_buku" name="stok_buku" value="<?= $data['buku']['stok_buku'] ?>" min="1">
          </div>

          <div class="col-md-6">
            <label for="status" class="form-label">Status</label>
            <select class="form-control border border-primary-subtle border-2" id="status" name="status">
              <option value="Tersedia" <?= $data['buku']['status'] == 'Tersedia' ? 'selected' : ''; ?>>Tersedia</option>
              <option value="Habis Terpinjam" <?= $data['buku']['status'] == 'Habis Terpinjam' ? 'selected' : ''; ?>>Habis Terpinjam</option>
            </select>
          </div>

          <div class="col-6">
            <a href="<?= BASEURL; ?>/Buku" type="button" class="btn btn-secondary">Kembali</a>
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
