
  <body>

    <!-- jumbotron -->

    <div id="beranda" class="container-fluid banner text-white">
      <div class="container text-center ">
        <h2>
          <b class=""
            >SELAMAT DATANG DI <br />
            PERPUSTAKAAN <br />
            POLITEKNIK NEGERI MEDAN</b
          >
        </h2>
        <h5>Membaca Buku Adalah Jembatan Ilmu</h5>
        <form class="d-flex justify-content-center" action="<?= BASEURL; ?>/Home_Kategori/pencaharian" method="post">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Ayo Cek Buku Yang Ingin Kamu Pinjam Disini"
            aria-label="Search"
            style="width: 500px"
            name="keyword"
          />
          <button class="btn btn-outline-light" type="submit">
            <img
              src="<?= BASEURL; ?>image/search.png"
              alt="search"
              style="width: 20px; height: 20px"
            />
          </button>
        </form>
      </div>
    </div>

    <!-- final jumbo tron -->

    <!-- about -->
    <section id=about class="container-fluid mt-3">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h2
            class="header-underline"
            style="
            font-weight: bold;
              border-bottom: 2px solid #f7b808;
              position: relative;
              display: inline-block;
              padding-bottom: 5px;
              color: #a82fcd;
            "
          >
            Tentang Kami
          </h2>
          <p>
            Perpustakaan Politeknik Negeri Medan adalah pusat sumber daya
            pembelajaran yang mendukung kegiatan akademik di kampus kami. Kami
            menyediakan berbagai koleksi buku, jurnal, dan materi digital yang
            bisa diakses oleh seluruh mahasiswa dan staf pengajar. 
            <p>
            Perpustakaan Politeknik Negeri Medan adalah pusat sumber daya
            pembelajaran yang mendukung kegiatan akademik di kampus kami. Kami
            menyediakan berbagai koleksi buku, jurnal, dan materi digital yang
            bisa diakses oleh seluruh mahasiswa dan staf pengajar.</p>
          </p>
          <p>
            Dengan fasilitas yang modern dan koleksi yang terus diperbarui,
            Perpustakaan Politeknik Negeri Medan berkomitmen untuk memfasilitasi
            kebutuhan informasi dan penelitian untuk semua penggunanya.
          </p>
        </div>

        <div class="col-md-6 ">
          <div class="row">
            <div class="col-md-6">
              <img
                src="<?= BASEURL; ?>image/about1.jpg"
                alt="Library Photo 1"
                class="img-fluid  custom-rounded"
                id="gambar1"
              />
            </div>
            <div class="col-md-6">
              <img
                src="<?= BASEURL; ?>image/about2.jpg"
                alt="Library Photo 2"
                class="img-fluid  custom-rounded"
                id="gambar2"
              />
            </div>
            <div class="col-md-6">
              <img
                src="<?= BASEURL; ?>image/about3.jpg"
                alt="Library Photo 3"
                class="img-fluid mb-3 custom-rounded"
                id="gambar2"
              />
            </div>
            <div class="col-md-6">
              <img
                src="<?= BASEURL; ?>image/about4.jpg"
                alt="Library Photo 4"
                class="img-fluid  mb-3 custom-rounded"
                id="gambar1"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- final about -->

    <!-- service -->
    <section id="layanan" class="container-fluid" style="background-color: #dbb6ee">
      <div
        class="container-fluid text-center custom-rounded-bottom p-3 mb-2"
        style="background-color: #7f4ca5"
      >
        <h2 class="text-white"><b>Layanan</b></h2>
      </div>
      <div class="container text-center pt-15">
        <div
          class="row justify-content-center"
          style="margin-top: 50px; padding: 0; margin: 0; padding-top: 30px"
        >
          <div class="col-3 text-center colored-box mx-3">
            <img src="<?= BASEURL; ?>image/katalog.png" alt="katalog" class="small-img" />
            <h5 class="text-white">Katalog</h5>
          </div>
          <div class="col-3 text-center colored-box mx-3">
            <img
              src="<?= BASEURL; ?>image/digitalrepository.png"
              alt="digitalrepository"
              class="small-img"
            />
            <h5 class="text-white">Digital Repository</h5>
          </div>
          <div class="col-3 text-center colored-box mx-3">
            <img
              src="<?= BASEURL; ?>image/ejournal.png"
              alt="ejournal"
              class="small-img"
            />
            <h5 class="text-white font-semibold">E-journal</h5>
          </div>
        </div>

        <div
          class="row justify-content-center"
          style="margin-top: 50px; padding-bottom: 50px"
        >
          <!-- Kolom Wifi -->
          <div class="col-3 text-center colored-box mx-3">
            <img src="<?= BASEURL; ?>image/wifi.png" alt="wifi" class="small-img" />
            <h5 class="text-white">Wifi</h5>
          </div>
          <!-- Kolom Keanggotaan -->
          <div class="col-3 text-center colored-box mx-3">
            <img
              src="<?= BASEURL; ?>image/keanggotaan.png"
              alt="keanggotaan"
              class="small-img"
            />
            <h5 class="text-white">Keanggotaan</h5>
          </div>
        </div>
      </div>
    </section>
    <!-- final service -->`

    <!-- category -->
    <section id="kategori" class="container">
      <div class="d-flex justify-content-center align-items-center">
        <h2 class="kategori-buku">
          <b>Kategori Buku</b>
        </h2>
      </div>
      <h4 class="text-center" style="color: #a82fcd; padding-bottom: 15px">
        Klik Kategori Buku Yang Ingin Kamu Cari
      </h4>
      <div class="row justify-content-center">
        <div class="col-3 text-center mx-4">
        <a href="<?= BASEURL; ?>/Home/Pendidikan">
          <div class="category-box">
            <img
              src="<?= BASEURL; ?>image/pendidikan.png"
              alt="Pendidikan"
              class="small-category-img"
            />
          </div>
          </a>
          <h4 >Pendidikan</h4>
        </div>
        <div class="col-3 text-center mx-4">
          <a href="<?= BASEURL; ?>/Home/Novel">
          <div class="category-box">
            <img
              src="<?= BASEURL; ?>image/novel.png"
              alt="Novel"
              class="small-category-img"
            />
          </div></a>
          <h4>Novel</h4>
        </div>
        <div class="col-3 text-center mx-4">
        <a href="<?= BASEURL; ?>/Home/Agama">
          <div class="category-box">
            <img
              src="<?= BASEURL; ?>image/religius.png"
              alt="Religi"
              class="small-category-img"
            />
          </div>
          </a>
          <h4>Agama</h4>
        </div>
        <div class="col-3 text-center mx-4">
        <a href="<?= BASEURL; ?>/Home/Bisnis">
          <div class="category-box">
            <img
              src="<?= BASEURL; ?>image/bisnis.png"
              alt="Bisnis"
              class="small-category-img"
            />
          </div></a>
          <h4>Bisnis</h4>
        </div>
        <div class="col-3 text-center mx-4">
        <a href="<?= BASEURL; ?>/Home/Hukum">
          <div class="category-box">
            <img
              src="<?= BASEURL; ?>image/hukum.png"
              alt="Hukum"
              class="small-category-img"
            />
          </div></a>
          <h4>Hukum</h4>
        </div>
      </div>
    </section>
    <!-- final category -->

    <!-- Contact Section -->
    <section id="kontak"
      class="container-fluid mt-5"
      style="background-color: #dbb6ee; padding-top: 35px; padding-bottom: 35px"
    >
    <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 d-flex justify-content-center">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.089564467081!2d98.6559045740342!3d3.5668594504448907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f629ef3dbdd%3A0x58a609b5c25852ff!2sPerpustakaan%20Politeknik%20Negeri%20Medan!5e0!3m2!1sid!2sid!4v1716081293452!5m2!1sid!2sid"
          width="100%"
          height="450"
          style="border:0; border-radius: 10px"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      <div class="col-md-6 text-purple">
        <h2 class="text-center"><b>Kontak Kami</b></h2>
        <div class="contact-item mt-3">
          <h4 class="text-black"><b>Alamat</b></h4>
          <p>
            <img src="image/lokasi.png" alt="Alamat" class="contact-icon"/>
            <span>
              <b>Universitas Sumatera Utara, Jln. Almamater No.1 Padang Bulan,
              Kec. Medan Baru, Kota Medan, Sumatera Utara</b>
            </span>
          </p>
        </div>
        <div class="contact-item mt-3">
          <h4 class="text-black"><b>Phone</b></h4>
          <p>
            <img src="image/telephon.png" alt="Telepon" class="contact-icon"/>
            <span><b>+6278 XXXX XXXX</b></span>
          </p>
        </div>
        <div class="contact-item mt-3">
          <h4 class="text-black"><b>Email</b></h4>
          <p>
            <img src="image/email.png" alt="Email" class="contact-icon"/>
            <span><b>politekniknegerimedan@gmail.com</b></span>
          </p>
        </div>
      </div>
    </div>
  </div>
    </section>
    <!-- final contact -->

    