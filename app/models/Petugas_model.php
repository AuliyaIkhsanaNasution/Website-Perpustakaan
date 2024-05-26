<?php 

class Petugas_Model {
    private $table = 'petugas';
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllPetugasDB()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


    public function getPetugasByUsername($username) {
        $this->db->query('SELECT * FROM petugas WHERE username = :username');
        $this->db->bind(':username', $username);
        return $this->db->single();
    }

    public function tambahDataPetugas($data)
    {
        // Cek apakah username sudah ada
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username = :username");
        $this->db->bind('username', $data['username']);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            Flasher::setFlash('gagal', 'Username sudah ada', 'danger');
            return 0;
        }

        // Cek apakah password sudah ada
        $this->db->query("SELECT * FROM " . $this->table . " WHERE password = :password");
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            Flasher::setFlash('gagal', 'Password sudah ada', 'danger');
            return 0;
        }

        // Insert data baru
        $query = "INSERT INTO " . $this->table . " 
                  (kode_petugas, username, nama, alamat, password) 
                  VALUES 
                  (:kode_petugas, :username, :nama, :alamat, :password)";

        $this->db->query($query);
        $this->db->bind('kode_petugas', $data['kode_petugas']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getPetugasDB($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kode_petugas = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function ubahDataPetugas($data)
    {
        // Cek apakah username sudah ada dan bukan milik user yang sedang diedit
        $this->db->query("SELECT * FROM " . $this->table . " WHERE username = :username AND kode_petugas != :kode_petugas");
        $this->db->bind('username', $data['username']);
        $this->db->bind('kode_petugas', $data['kode_petugas']);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            Flasher::setFlash('gagal', 'Username sudah ada', 'danger');
            return 0;
        }

        // Cek apakah password sudah ada dan bukan milik user yang sedang diedit
        $this->db->query("SELECT * FROM " . $this->table . " WHERE password = :password AND kode_petugas != :kode_petugas");
        $this->db->bind('password', $data['password']);
        $this->db->bind('kode_petugas', $data['kode_petugas']);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            Flasher::setFlash('gagal', 'Password sudah ada', 'danger');
            return 0;
        }

        // Update data petugas
        $query = "UPDATE " . $this->table . " SET 
                    nama = :nama,
                    username = :username,
                    password = :password,
                    alamat = :alamat
                  WHERE kode_petugas = :kode_petugas";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kode_petugas', $data['kode_petugas']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPetugas($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE kode_petugas = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataPetugas($keyword)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    
}?>