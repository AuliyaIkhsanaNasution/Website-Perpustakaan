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
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('admin/index');
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