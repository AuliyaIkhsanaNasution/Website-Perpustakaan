<?php 
 class Admin extends Controller {

    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $this->verifySession(); // Panggil fungsi verifikasi sesi
    }

    // Fungsi untuk memeriksa sesi
    private function verifySession() {
        if (!isset($_SESSION['user_id'])) {
            header('Location:' . BASEURL .'/login/index.php');
            exit;
        }
    }

    public function index ()
    {
        $this->verifySession(); // Panggil fungsi verifikasi sesi di setiap metode yang memerlukan otorisasi

        $data['judul']='Dashboard Perpustakaan Politeknik Negeri Medan';
        $data['total_anggota'] =$this->model('Dashboard_model')->countAnggota();
        $data['total_buku'] = $this->model('Dashboard_model')->countBuku();
        $data['total_peminjaman'] = $this->model('Dashboard_model')->countPeminjaman();
        $data['total_denda'] = $this->model('Dashboard_model')->sumDenda();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }

    public function Petugas()
    {
        $data['judul']='Data Petugas Perpustakaan';
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('admin/petugas');
        $this->view('templates/footer');
    }

    public function Peminjaman()
    {
        $data['judul']='Data Peminjaman Perpustakaan';
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('admin/peminjaman');
        $this->view('templates/footer');
    }
 }
?>