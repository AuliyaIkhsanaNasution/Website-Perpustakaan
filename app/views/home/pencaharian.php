<!-- foto -->
<section class="container-fluid" style="background-color: #d8b1f4; padding-top: 100px">
  <div class="container text-center pt-15">
    <div class="row justify-content-center" style="margin-top: 50px; padding: 0; margin: 0; padding-top: 30px">
      <!-- Menambahkan judul Novel/Fiksi di atas kotak -->
      <div class="row justify-content-between align-items-center" style="margin-bottom: 20px">
        <div class="col-auto">
        </div>
        <div class="col-auto">

          <a href="<?= BASEURL; ?>/Home" class="read-more h5 mt-3" style="text-decoration: none; text-align: left; display: block;"><- Kembali Ke Halaman Utama</a>
        </div>
      </div>


      <div class="row">
        <?php if (!empty($data['buku'])): ?>
          <?php foreach ($data['buku'] as $buku): ?>
            <div class="col-md-3 col-sm-6 mb-4">
              <img src="<?= BASEURL; ?>/uploads/<?= $buku['gambar_buku']; ?>" alt="<?= $buku['judul']; ?>" height="320px" width="250px" />
              <div class="info-box mt-2 ">
                <h6 style="color: #4b1c71; margin-top: 10px; text-align: left;" ><?= $buku['judul']; ?></h6>
                <h6 style="color: black; margin: 0; text-align: left;">By <?= $buku['nama_penerbit']; ?></h6>
                <a href="<?= BASEURL; ?>/Home_Kategori/detail/<?= $buku['isbn']; ?>" class="read-more" style="text-decoration: none; text-align: right; display: block;">Read More</a>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="col-12">
            <h5 class="text-center" style="color: #4b1c71; margin-bottom: 270px;" >Buku tidak tersedia</h5>
          </div>
        <?php endif; ?>
      </div>
    </div>
    </div>
</section>
<!-- final foto -->
