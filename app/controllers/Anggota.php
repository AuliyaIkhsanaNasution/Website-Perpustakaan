<?php 
class Anggota extends Controller {

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

        $data['judul']='Data Anggota Perpustakaan';
        $data['anggota'] = $this->model('Anggota_model')->getAllAnggotaDB();
        $this->view('templates/header',$data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('anggota/index',$data);
        $this->view('templates/footer');
    }

    
    public function Tambah (){

        // Memanggil fungsi uploadImage untuk mengelola upload gambar
    $gambar = $this->model('Anggota_model')->uploadImage();

    // Jika gambar berhasil diupload
    if ($gambar) {
        // Mendapatkan data dari $_POST
        $data = [
            'nim' => $_POST['nim'],
            'gambar' => $gambar,
            'nama' => $_POST['nama'],
            'prodi' => $_POST['prodi'],
            'kelas' => $_POST['kelas'],
            'alamat' => $_POST['alamat']
        ];

        // Menambah data anggota ke database
        if ($this->model('Anggota_model')->tambahDataAnggota($data) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Anggota');
            exit;
        }else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Anggota');
            exit;
        }
    }
}


public function Hapus($id){
    if ($this->model('Anggota_model')->hapusDataAnggota($id) > 0) {
        Flasher::setFlash('Berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/Anggota');
        exit;
    }else {
        Flasher::setFlash('Gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/Anggota');
        exit;
    }
}



public function FormUbah ($id){

    $data['judul']='Ubah Data Anggota Perpustakaan';
    $data['anggota'] = $this->model('Anggota_model')->getAnggotaDB($id);
    $this->view('templates/header',$data);
    $this->view('templates/sidebar');
    $this->view('templates/topbar');
    $this->view('anggota/ubah',$data);
    $this->view('templates/footer');
}

public function ubahanggota()
    {
        // Load the model
        $this->model('Anggota_model');

        // Validate and process the uploaded image
        $gambarLama = $_POST['gambarLama'];
        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = $this->model('Anggota_model')->uploadImage();

        }

        // Update member data in the database
        if ($this->model('Anggota_model')->updateAnggota($_POST, $gambar)) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Anggota');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Anggota');
            exit;
        }
    }

    public function Cari()
    {
        $data['judul'] = 'Data Anggota Perpustakaan';
        $data['anggota'] = $this->model('Anggota_model')->cariDataAnggota();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('anggota/index', $data);
        $this->view('templates/footer');
    }
}
?>