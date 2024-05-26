<?php 
class Penerbit extends Controller {

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

        $data['judul']='Data Penerbit Buku';
        $data['penerbit'] = $this->model('Penerbit_model')->getAllPenerbitDB();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('penerbit/index',$data);
        $this->view('templates/footer');
    }

    public function Tambah (){
        if ($this->model('Penerbit_model')->tambahDataPenerbit($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Penerbit');
            exit;
        }else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Penerbit');
            exit;
        }
    }

    public function Hapus($id){
        if ($this->model('Penerbit_model')->hapusDataPenerbit($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Penerbit');
            exit;
        }else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Penerbit');
            exit;
        }
    }

    public function Cari()
    {
        $data['judul'] = 'Data Penerbit Perpustakaan';
        $data['penerbit'] = $this->model('Penerbit_model')->cariDataPenerbit();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('penerbit/index', $data);
        $this->view('templates/footer');
    }
}
?>