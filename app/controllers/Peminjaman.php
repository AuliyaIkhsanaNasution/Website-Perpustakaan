<?php 
class Peminjaman extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Peminjaman Perpustakaan';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjaman();
        $data['anggota'] = $this->model('Anggota_model')->getAllAnggotaDB();
        $data['buku'] = $this->model('Buku_model')->getAllBukuDB();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('peminjaman/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // Mendapatkan data dari $_POST
        $data = [
            'nim' => $_POST['nim'],
            'isbn' => $_POST['isbn'],
            'tanggal_peminjaman' => $_POST['tanggal_peminjaman'],
            'tanggal_pengembalian_rencana' => $_POST['tanggal_pengembalian_rencana'],
            'banyak_buku' => $_POST['banyak_buku']
        ];
    
        if ($this->model('Peminjaman_model')->tambahDataPeminjaman($data) > 0) {
            if ($this->model('Peminjaman_model')->updatePinjamBuku($data['isbn'], $data['banyak_buku']) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/Peminjaman');
                exit;
            } else {
                Flasher::setFlash('gagal', 'update', 'danger');
                header('Location: ' . BASEURL . '/Peminjaman');
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Peminjaman');
            exit;
        }
        
    }
    

    public function hapus($id)
    {
        if ($this->model('Peminjaman_model')->hapusDataPeminjaman($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Peminjaman');
            exit;
        }
    }

    public function kembalikan($id)
    {
        if ($this->model('Peminjaman_model')->kembalikanBuku($id) > 0) {
            Flasher::setFlash('berhasil', 'dikembalikan', 'success');
            header('Location: ' . BASEURL . '/Peminjaman');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dikembalikan', 'danger');
            header('Location: ' . BASEURL . '/Peminjaman');
            exit;
        }
    }

    public function edit($id)
{
    $data['judul'] = 'Edit Data Peminjaman';
    $data['peminjaman'] = $this->model('Peminjaman_model')->getPeminjamanById($id);
    $data['anggota'] = $this->model('Anggota_model')->getAllAnggotaDB();
    $data['buku'] = $this->model('Buku_model')->getAllBukuDB();
    $this->view('templates/header', $data);
    $this->view('templates/sidebar');
    $this->view('templates/topbar');
    $this->view('peminjaman/edit', $data);
    $this->view('templates/footer');
}

public function update()
{
    if ($this->model('Peminjaman_model')->updateDataPeminjaman($_POST) > 0) {
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/Peminjaman');
        exit;
    } else {
        Flasher::setFlash('gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/Peminjaman');
        exit;
    }
}

}

?>