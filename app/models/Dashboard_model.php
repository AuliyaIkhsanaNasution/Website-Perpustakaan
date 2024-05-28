<?php 

class Dashboard_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database; // Pastikan class Database telah di-load atau diakses dengan benar
    }

    public function countAnggota() {
        $query = "SELECT COUNT(*) as total_anggota FROM anggota";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function countBuku() {
        $query = "SELECT COUNT(*) as total_buku FROM buku";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function countPeminjaman() {
        $query = "SELECT COUNT(*) as total_peminjaman FROM peminjaman";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function sumDenda() {
        $query = "SELECT SUM(total_denda) as total_denda FROM denda";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}
