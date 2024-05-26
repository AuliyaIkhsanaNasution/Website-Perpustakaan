<?php 
class Kategori extends Controller {

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

    public function index (){

        $data['judul']='Data Kategori Buku';
        $data['kategori'] = $this->model('Kategori_model')->getAllKategoriDB();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('kategori/index',$data);
        $this->view('templates/footer');
    }

    public function Tambah (){
        if ($this->model('Kategori_model')->tambahDataKategori($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Kategori');
            exit;
        }else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Kategori');
            exit;
        }
    }

    public function Hapus($id){
        if ($this->model('Kategori_model')->hapusDataKategori($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Kategori');
            exit;
        }else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Kategori');
            exit;
        }
    }

    public function Cari()
    {
        $data['judul'] = 'Data Kategori Perpustakaan';
        $data['kategori'] = $this->model('Kategori_model')->cariDataKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('kategori/index', $data);
        $this->view('templates/footer');
    }
}
?>