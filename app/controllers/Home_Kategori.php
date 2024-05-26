<?php

class Home_Kategori extends Controller
{
    public function detail($isbn)
    {
        $data['judul'] = 'Detail Buku Perpustakaan';
        $data['buku'] = $this->model('Buku_model')->getBukuByISBN($isbn);
        $this->view('templates/header', $data);
        $this->view('Home/detail', $data);
    }


    public function pencaharian()
    {
        // Jika ada data pencarian dikirimkan melalui POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['keyword'])) {
            // Tangkap inputan pencarian dari form
            $keyword = $_POST['keyword'];
    
            // Panggil metode cariDataBuku dari model untuk mencari buku berdasarkan keyword
            $data['judul'] = 'Pencarian Buku Perpustakaan';
            $data['buku'] = $this->model('Buku_model')->cariDataBuku($keyword);
    
            // Panggil view untuk menampilkan hasil pencarian
            $this->view('templates/headeruser', $data);
            $this->view('home/pencaharian', $data);
            $this->view('templates/footeruser');
        } else {
            // Jika tidak ada data pencarian dikirimkan, kembali ke halaman utama
            header('Location: ' . BASEURL . '/Home');
        }
    }
}
?>
