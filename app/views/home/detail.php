<!-- Detail Buku -->
<section class="container-fluid" style="background-color: #dbb6ee; padding-top: 20px; min-height: 100vh;">
  <div class="container">
    <!-- Header Detail Buku -->
    <div class="row mb-3">
      <div class="col-12 text-center py-2 fluid" style="background-color: #4b1c71;">
        <h1 class="text-white">Detail Buku</h1>
      </div>
    </div>

    <div class="row">
      <!-- Gambar Buku dan Status -->
      <div class="col-md-4 text-center">
        <img src="<?= BASEURL; ?>/uploads/<?= $data['buku']['gambar_buku']; ?>" alt="<?= $data['buku']['judul']; ?>" class=" mb-3" height="420px" width="340px">
        <h5>Status: 
          <?php if ($data['buku']['stok_buku'] > 0): ?>
            <span class="badge badge-success">Tersedia</span>
          <?php else: ?>
            <span class="badge badge-danger">Tidak Tersedia</span>
          <?php endif; ?>
        </h5>
      </div>

      <!-- Detail Buku -->
      <div class="col-md-8">
    <table class="table table-borderless">
        <tbody>
            <tr>
                <th scope="row" class="text-left">ISBN</th>
                <td class="text-left"><?= $data['buku']['isbn']; ?></td>
            </tr>
            <tr>
                <th scope="row" class="text-left">Judul</th>
                <td class="text-left"><?= $data['buku']['judul']; ?></td>
            </tr>
            <tr>
                <th scope="row" class="text-left">Kategori</th>
                <td class="text-left"><?= $data['buku']['kategori']; ?></td>
            </tr>
            <tr>
                <th scope="row" class="text-left">Pengarang</th>
                <td class="text-left"><?= $data['buku']['pengarang']; ?></td>
            </tr>
            <tr>
                <th scope="row" class="text-left">Penerbit</th>
                <td class="text-left"><?= $data['buku']['nama_penerbit']; ?></td>
            </tr>
            <tr>
                <th scope="row" class="text-left">Tanggal Terbit</th>
                <td class="text-left"><?= $data['buku']['tanggal_terbit']; ?></td>
            </tr>
            <tr>
                <th scope="row" class="text-left">Stok Buku</th>
                <td class="text-left"><?= $data['buku']['stok_buku']; ?></td>
            </tr>
            <tr>
                <th scope="row" class="text-left">Sinopsis</th>
                <td class="text-left"><?= $data['buku']['sinopsis']; ?></td>
            </tr>
        </tbody>
    </table>
    <span>Lihat kategori lainnya : </span>
    <a href="<?= BASEURL; ?>/Home/Novel" class="badge badge-primary" style="text-decoration: none;">Novels</a>
    <a href="<?= BASEURL; ?>/Home/Agama" class="badge badge-primary" style="text-decoration: none;">Agama</a>
    <a href="<?= BASEURL; ?>/Home/Pendidikan" class="badge badge-primary" style="text-decoration: none;">Pendidikan</a>
    <a href="<?= BASEURL; ?>/Home/Bisnis" class="badge badge-primary" style="text-decoration: none;">Bisnis</a>
    <a href="<?= BASEURL; ?>/Home/Hukum" class="badge badge-primary" style="text-decoration: none;">Hukum</a>
</div>

    </div>

    <!-- Kembali Ke Halaman Sebelumnya -->
    <div class="row mt-4">
      <div class="col-12 text-center"><center>
        <a href="<?= BASEURL; ?>/Home" class="btn btn-primary btn-lg mb-4 mt-0">Kembali Ke Halaman Utama</a></center>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Detail Buku -->
