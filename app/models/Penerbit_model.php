<?php 
class Penerbit_model {

    private $table = 'penerbit';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    
    public function getAllPenerbitDB()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY nama_penerbit');
        return $this->db->resultSet();
    }    

    public function tambahDataPenerbit($data){
        $query = "INSERT INTO penerbit
                    VALUES
                    ('', :nama_penerbit)";
        $this->db->query($query);
        $this->db->bind('nama_penerbit', $data['nama_penerbit']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPenerbit($id){
        $query = "DELETE FROM penerbit WHERE id_penerbit = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariDataPenerbit()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM penerbit WHERE nama_penerbit LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
?>