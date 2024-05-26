<?php 
class Kategori_model {

    private $table = 'kategori';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    
    public function getAllKategoriDB()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY kategori');
        return $this->db->resultSet();
    }

    public function tambahDataKategori($data){
        $query = "INSERT INTO Kategori
                    VALUES
                    ('', :kategori)";
        $this->db->query($query);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataKategori($id){
        $query = "DELETE FROM kategori WHERE id_kategori = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariDataKategori()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM kategori WHERE kategori LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
?>