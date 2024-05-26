<?php 

class Petugas extends Controller
{
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

        $data['judul']='Data Petugas Perpustakaan';
        $data['petugas'] = $this->model('Petugas_model')->getAllPetugasDB();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('petugas/index',$data);
        $this->view('templates/footer');
    }

    public function Tambah()
    {
        if ($this->model('Petugas_model')->tambahDataPetugas($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/petugas');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan karena kesamaan username/password, harap isikan username dan password yang berbeda', 'danger');
            header('Location: ' . BASEURL . '/petugas');
            exit;
        }
    }

    public function FormUbah ($id){

        $data['judul']='Ubah Data Petugas Perpustakaan';
        $data['petugas'] = $this->model('Petugas_model')->getPetugasDB($id);
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('petugas/ubahpetugas',$data);
        $this->view('templates/footer');
    }

    public function ubahpetugas()
    {
        if ($this->model('Petugas_model')->ubahDataPetugas($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Petugas');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah karena kesamaan username/password, harap isikan username dan password yang berbeda', 'danger');
            header('Location: ' . BASEURL . '/Petugas');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Petugas_model')->hapusDataPetugas($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/petugas');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/petugas');
            exit;
        }
    }

    public function Cari(){

        $data['judul']='Data Petugas Perpustakaan';
        $data['petugas'] = $this->model('Petugas_model')->cariDataPetugas($_POST['keyword']);
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('petugas/index',$data);
        $this->view('templates/footer');
    }
}
?>