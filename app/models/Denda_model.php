<?php

class Denda_model {
    private $table = 'denda';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllDenda() {
        $query = 'SELECT denda.*, anggota.nama, buku.judul, anggota.nim, buku.isbn
                  FROM denda 
                  JOIN anggota ON denda.nim = anggota.nim 
                  JOIN buku ON denda.isbn = buku.isbn';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahDenda($data) {
        $query = "INSERT INTO denda (id_peminjaman, nim, isbn, tanggal_peminjaman, tanggal_pengembalian_aktual, jumlah_hari_terlambat, total_denda) 
                  VALUES (:id_peminjaman, :nim, :isbn, :tanggal_peminjaman, :tanggal_pengembalian_aktual, :jumlah_hari_terlambat, :total_denda)";
        
        $this->db->query($query);
        $this->db->bind(':id_peminjaman', $data['id_peminjaman']);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':isbn', $data['isbn']);
        $this->db->bind(':tanggal_peminjaman', $data['tanggal_peminjaman']);
        $this->db->bind(':tanggal_pengembalian_aktual', $data['tanggal_pengembalian_aktual']);
        $this->db->bind(':jumlah_hari_terlambat', $data['jumlah_hari_terlambat']);
        $this->db->bind(':total_denda', $data['total_denda']);
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDenda($id) {
        $query = 'DELETE FROM denda WHERE id_denda = :id_denda';
        $this->db->query($query);
        $this->db->bind(':id_denda', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
