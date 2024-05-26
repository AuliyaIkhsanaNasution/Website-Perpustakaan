<!-- foto -->
<section class="container-fluid" style="background-color: #d8b1f4; padding-top: 100px">
  <div class="container text-center pt-15">
    <div class="row justify-content-center" style="margin-top: 50px; padding: 0; margin: 0; padding-top: 30px">
      <!-- Menambahkan judul Novel/Fiksi di atas kotak -->
      <div class="row justify-content-between align-items-center" style="margin-bottom: 20px">
        <div class="col-auto">
        <a href="<?= BASEURL; ?>/Home/Agama" style="text-decoration: none;"><h2 style="color: #4b1c71;"><b>Agama</b></h2></a>
        </div>
        <div class="col-auto">
        <form action="<?= BASEURL; ?>/Home/cariagama" method="post">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..." name="keyword" />
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">
                <img src="<?= BASEURL; ?>image/search.png" alt="search" style="width: 20px; height: 20px" />
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</form>

          <a href="<?= BASEURL; ?>/Home" class="read-more h5 mt-3" style="text-decoration: none; text-align: left; display: block;"><- Kembali Ke Halaman Utama</a>

        </div>
      </div>


      <div class="row">
        <?php foreach ($data['buku'] as $buku): ?>
          <div class="col-md-3 col-sm-6 mb-4">
            <img src="<?= BASEURL; ?>/uploads/<?= $buku['gambar_buku']; ?>" alt="<?= $buku['judul']; ?>" height="320px" width="250px" />
            <div class="info-box mt-1 ">
              <h6 style="color: #4b1c71; margin-top: 10px; text-align: left;" ><?= $buku['judul']; ?></h6>
              <h6 style="color: black; margin: 0; text-align: left;">By <?= $buku['nama_penerbit']; ?></h6>
              <a href="<?= BASEURL; ?>/Home_Kategori/detail/<?= $buku['isbn']; ?>" class="read-more " style="text-decoration: none; text-align: right; display: block;">Read More</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<!-- final foto -->
