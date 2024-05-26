<?php 
class Buku extends Controller {

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

    public function index()
    {
        $data['judul'] = 'Data Buku Perpustakaan';
        $data['buku'] = $this->model('Buku_model')->getAllBukuDB();
        $data['kategori'] = $this->model('Buku_model')->getAllKategori();
        $data['penerbit'] = $this->model('Buku_model')->getAllPenerbit();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

    
    public function Tambah (){

        // Memanggil fungsi uploadImage untuk mengelola upload gambar
    $gambar = $this->model('Buku_model')->uploadImage();

    // Jika gambar berhasil diupload
    if ($gambar) {
        // Mendapatkan data dari $_POST
        $data = [
            'isbn' => $_POST['isbn'],
            'gambar_buku' => $gambar,
            'id_kategori' => $_POST['id_kategori'],
            'judul' => $_POST['judul'],
            'pengarang' => $_POST['pengarang'],
            'id_penerbit' => $_POST['id_penerbit'],
            'tanggal_terbit' => $_POST['tanggal_terbit'],
            'sinopsis' => $_POST['sinopsis'],
            'stok_buku' => $_POST['stok_buku'],
            'status' => $_POST['status']
        ];
            // Menambah data buku ke database
            if ($this->model('Buku_model')->tambahDataBuku($data) > 0) {
                Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/Buku');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/Buku');
                exit;
            }
    }
}


public function Hapus($id){
    if ($this->model('Buku_model')->hapusDataBuku($id) > 0) {
        Flasher::setFlash('Berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/Buku');
        exit;
    }else {
        Flasher::setFlash('Gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/Buku');
        exit;
    }
}



public function FormUbah($id)
{
    $data['judul'] = 'Edit Data Buku Perpustakaan';
    $data['buku'] = $this->model('Buku_model')->getBukuById($id);
    $data['kategori'] = $this->model('Buku_model')->getAllKategori();
    $data['penerbit'] = $this->model('Buku_model')->getAllPenerbit();

    $this->view('templates/header', $data);
    $this->view('templates/sidebar');
    $this->view('templates/topbar');
    $this->view('buku/ubah', $data);
    $this->view('templates/footer');
}

    public function UbahBuku()
    {
        // Load the model
        $this->model('Buku_model');
    
        // Validate and process the uploaded image
        $gambarLama = $_POST['gambarLama'];
        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = $this->model('Buku_model')->uploadImage();
        }
    
       // Update member data in the database
       if ($this->model('Buku_model')->updateBuku($_POST, $gambar)) {
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/Buku');
        exit;
    } else {
        Flasher::setFlash('gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/Buku');
        exit;
        }
    }
    

    public function Cari()
{
    // Jika ada data pencarian dikirimkan melalui POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['keyword'])) {
        // Tangkap inputan pencarian dari form
        $keyword = $_POST['keyword'];

        // Panggil metode cariDataBuku dari model untuk mencari buku berdasarkan keyword
        $data['judul'] = 'Hasil Pencarian Buku';
        $data['buku'] = $this->model('Buku_model')->cariDataBuku($keyword);

        // Panggil view untuk menampilkan hasil pencarian
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('Buku/index', $data);
        $this->view('templates/footer');
    } else {
        // Jika tidak ada data pencarian dikirimkan, kembali ke halaman utama
        header('Location: ' . BASEURL . '/Buku');
    }
}


}
?>