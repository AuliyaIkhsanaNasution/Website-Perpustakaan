<?php 
 class Home extends Controller {

    public function index ()
    {
        $data['judul']='Perpustakaan Politeknik Negeri Medan';
        $this->view('templates/headeruser',$data);
        $this->view('home/index');
        $this->view('templates/footeruser');
    }

    public function Novel() {
        $data['judul'] = 'Buku Kategori Novel';
        $data['buku'] = $this->model('Buku_model')->getBukuByKategoriNovel();
        $this->view('templates/headeruser', $data);
        $this->view('home/novel', $data);
        $this->view('templates/footeruser');
    }

    public function Agama() {
        $data['judul'] = 'Buku Kategori Agama';
        $data['buku'] = $this->model('Buku_model')->getBukuByKategoriAgama();
        $this->view('templates/headeruser', $data);
        $this->view('home/agama', $data);
        $this->view('templates/footeruser');
    }

    public function Pendidikan() {
        $data['judul'] = 'Buku Kategori Pendidikan';
        $data['buku'] = $this->model('Buku_model')->getBukuByKategoriPendidikan();
        $this->view('templates/headeruser', $data);
        $this->view('home/pendidikan', $data);
        $this->view('templates/footeruser');
    }

    public function Bisnis() {
        $data['judul'] = 'Buku Kategori Bisnis';
        $data['buku'] = $this->model('Buku_model')->getBukuByKategoriBisnis();
        $this->view('templates/headeruser', $data);
        $this->view('home/bisnis', $data);
        $this->view('templates/footeruser');
    }

    public function Hukum() {
        $data['judul'] = 'Buku Kategori Hukum';
        $data['buku'] = $this->model('Buku_model')->getBukuByKategoriHukum();
        $this->view('templates/headeruser', $data);
        $this->view('home/hukum', $data);
        $this->view('templates/footeruser');
    }

    public function carinovel()
{
    // Jika ada data pencarian dikirimkan melalui POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['keyword'])) {
        // Tangkap inputan pencarian dari form
        $keyword = $_POST['keyword'];

        // Panggil metode cariDataBuku dari model untuk mencari buku berdasarkan keyword
        $data['judul'] = 'Buku Kategori Novel';
        $data['buku'] = $this->model('Buku_model')->cariBukuByJudulnovel($keyword);

        // Panggil view untuk menampilkan hasil pencarian
        $this->view('templates/headeruser', $data);
        $this->view('home/novel', $data);
        $this->view('templates/footeruser');
    } else {
        // Jika tidak ada data pencarian dikirimkan, kembali ke halaman utama
        header('Location: ' . BASEURL . '/Home/Novel');
    }
}

public function cariagama()
{
    // Jika ada data pencarian dikirimkan melalui POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['keyword'])) {
        // Tangkap inputan pencarian dari form
        $keyword = $_POST['keyword'];

        // Panggil metode cariDataBuku dari model untuk mencari buku berdasarkan keyword
        $data['judul'] = 'Buku Kategori Agama';
        $data['buku'] = $this->model('Buku_model')->cariBukuByJudulagama($keyword);

        // Panggil view untuk menampilkan hasil pencarian
        $this->view('templates/headeruser', $data);
        $this->view('home/agama', $data);
        $this->view('templates/footeruser');
    } else {
        // Jika tidak ada data pencarian dikirimkan, kembali ke halaman utama
        header('Location: ' . BASEURL . '/Home/Agama');
    }
}

public function caripendidikan()
{
    // Jika ada data pencarian dikirimkan melalui POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['keyword'])) {
        // Tangkap inputan pencarian dari form
        $keyword = $_POST['keyword'];

        // Panggil metode cariDataBuku dari model untuk mencari buku berdasarkan keyword
        $data['judul'] = 'Buku Kategori Pendidikan';
        $data['buku'] = $this->model('Buku_model')->cariBukuByJudulpendidikan($keyword);

        // Panggil view untuk menampilkan hasil pencarian
        $this->view('templates/headeruser', $data);
        $this->view('home/pendidikan', $data);
        $this->view('templates/footeruser');
    } else {
        // Jika tidak ada data pencarian dikirimkan, kembali ke halaman utama
        header('Location: ' . BASEURL . '/Home/Pendidikan');
    }
}

public function caribisnis()
{
    // Jika ada data pencarian dikirimkan melalui POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['keyword'])) {
        // Tangkap inputan pencarian dari form
        $keyword = $_POST['keyword'];

        // Panggil metode cariDataBuku dari model untuk mencari buku berdasarkan keyword
        $data['judul'] = 'Buku Kategori Bisnis';
        $data['buku'] = $this->model('Buku_model')->cariBukuByJudulbisnis($keyword);

        // Panggil view untuk menampilkan hasil pencarian
        $this->view('templates/headeruser', $data);
        $this->view('home/bisnis', $data);
        $this->view('templates/footeruser');
    } else {
        // Jika tidak ada data pencarian dikirimkan, kembali ke halaman utama
        header('Location: ' . BASEURL . '/Home/Bisnis');
    }
}

public function carihukum()
{
    // Jika ada data pencarian dikirimkan melalui POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['keyword'])) {
        // Tangkap inputan pencarian dari form
        $keyword = $_POST['keyword'];

        // Panggil metode cariDataBuku dari model untuk mencari buku berdasarkan keyword
        $data['judul'] = 'Buku Kategori Hukum';
        $data['buku'] = $this->model('Buku_model')->cariBukuByJudulhukum($keyword);

        // Panggil view untuk menampilkan hasil pencarian
        $this->view('templates/headeruser', $data);
        $this->view('home/hukum', $data);
        $this->view('templates/footeruser');
    } else {
        // Jika tidak ada data pencarian dikirimkan, kembali ke halaman utama
        header('Location: ' . BASEURL . '/Home/Hukum');
    }
}

 }
?>