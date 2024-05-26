<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
      <link rel="stylesheet" href="<?= BASEURL; ?>css/style.css">
      <style>
    .banner {
    position: relative;
    background-image: url('<?= BASEURL; ?>image/hero.jpg');
    background-size: cover;
    padding-top: 20%;
    padding-bottom: 20%;
    color: white;
}

.container {
    position: relative;
    z-index: 1; /* Mengatur z-index agar teks tetap di atas lapisan gelap */
}

.banner::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Ubah nilai alpha untuk mengatur tingkat kegelapan */
    z-index: 0; /* Mengatur z-index agar lapisan gelap berada di belakang teks */
}

  .nav-link:hover {
        color: #1b1111; /* Ubah warna teks saat hover */
        background-color: #6c757d; /* Ubah warna latar belakang saat hover */
    }
      </style>
    <title><?= $data['judul'];  ?></title>
  </head>

      <!-- navbar -->
      <nav class="navbar navbar-expand-lg fixed-top" style="background: #7f4ca5">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img
            src="<?= BASEURL; ?>image/logo.png"
            alt="Logo Politeknik Negeri Medan"
            height="80"
            class="me-2"
          />
          <div class="fw-semibold text-white">
            Perpustakaan dan Arsip <br />
            Politeknik Negeri Medan
          </div>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: 26%;">
    <div class="navbar-nav fw-semibold fs-5 " style="margin-right: 20px;">
        <a class="nav-link text-white" aria-current="page" href="#beranda">Beranda</a>
        <a class="nav-link text-white" href="#about">Tentang Kami</a>
        <a class="nav-link text-white" href="#layanan">Layanan</a>
        <a class="nav-link text-white" href="#kategori">Kategori</a>
        <a class="nav-link text-white" href="#kontak">Kontak</a>
    </div>
</div>

      </div>
    </nav>
    <!-- final navbar -->