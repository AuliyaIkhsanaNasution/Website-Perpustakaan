<?php 

class Anggota_model {

    private $table = 'anggota';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllAnggotaDB()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


    public function tambahDataAnggota($data){

        $query = "INSERT INTO anggota 
                    VALUES
                    (:nim, :gambar, :nama, :prodi, :kelas, :alamat)";
        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function uploadImage() {
        $fileName = $_FILES['gambar']['name'];
        $fileSize = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if  ($error === 4) {
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $validExtensions = ['jpeg', 'jpg', 'png', 'gif'];
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        if (!in_array($extension, $validExtensions)) {
            return false;
        }

        // cek jika ukuran gambar terlalu besar (2MB)
        if ($fileSize > 2000000) {
            return false;
        }

        // generate nama gambar baru
        $newFileName = uniqid();
        // upload gambar ke direktori yang ditentukan
        move_uploaded_file($tmpName, 'uploads/' . $newFileName);
        return $newFileName;
    }

    public function hapusDataAnggota($id){
        $query = "DELETE FROM anggota WHERE nim = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getAnggotaDB($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nim = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function updateAnggota($data, $gambar)
    {
        $query = "UPDATE anggota SET
                    nama = :nama,
                    gambar = :gambar,
                    prodi = :prodi,
                    kelas = :kelas,
                    alamat = :alamat
                  WHERE nim = :nim";

        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('gambar', $gambar);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('alamat', $data['alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataAnggota()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM anggota WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
    

?>