<?php

class Denda extends Controller {
    public function index() {
        $data['judul'] = 'Data Denda';
        $data['denda'] = $this->model('Denda_model')->getAllDenda();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('denda/index', $data);
        $this->view('templates/footer');
    }

    public function tambah($id_peminjaman) {
        $peminjaman = $this->model('Peminjaman_model')->getPeminjamanById($id_peminjaman);
        $tanggal_pengembalian_rencana = new DateTime($peminjaman['tanggal_pengembalian_rencana']);
        $tanggal_pengembalian_aktual = new DateTime(date('Y-m-d'));
        $interval = $tanggal_pengembalian_rencana->diff($tanggal_pengembalian_aktual);
        $jumlah_hari_terlambat = $interval->days;

        // Jika tanggal pengembalian aktual lebih besar dari tanggal pengembalian rencana, maka ada keterlambatan
        if ($tanggal_pengembalian_aktual > $tanggal_pengembalian_rencana) {
            $total_denda = $jumlah_hari_terlambat * 5000;
            $data = [
                'id_peminjaman' => $peminjaman['id_peminjaman'],
                'nim' => $peminjaman['nim'],
                'isbn' => $peminjaman['isbn'],
                'tanggal_peminjaman' => $peminjaman['tanggal_peminjaman'],
                'tanggal_pengembalian_aktual' => $tanggal_pengembalian_aktual->format('Y-m-d'),
                'jumlah_hari_terlambat' => $jumlah_hari_terlambat,
                'total_denda' => $total_denda
            ];

            if ($this->model('Denda_model')->tambahDenda($data) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            }
        } else {
            Flasher::setFlash('tidak ada denda', 'karena pengembalian tidak terlambat', 'info');
        }
        header('Location: ' . BASEURL . '/Peminjaman');
        exit;
    }

    public function hapus($id) {
        if ($this->model('Denda_model')->hapusDenda($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }
        header('Location: ' . BASEURL . '/Denda');
        exit;
    }
}
