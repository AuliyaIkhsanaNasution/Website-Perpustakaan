<?php
class Buku_model
{
    private $table = 'buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBukuDB()
    {
        $query = "SELECT buku.*, kategori.kategori, penerbit.nama_penerbit 
                  FROM " . $this->table . "
                  JOIN kategori ON buku.id_kategori = kategori.id_kategori
                  JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit ORDER BY buku.judul";
        
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getAllKategori()
    {
        $this->db->query("SELECT * FROM kategori");
        return $this->db->resultSet();
    }

    public function getAllPenerbit()
    {
        $this->db->query("SELECT * FROM penerbit");
        return $this->db->resultSet();
    }

    public function tambahDataBuku($data)
    {
        $query = "INSERT INTO buku (isbn, gambar_buku, id_kategori, judul, pengarang, id_penerbit, tanggal_terbit, sinopsis, stok_buku, status) 
                  VALUES (:isbn, :gambar_buku, :id_kategori, :judul, :pengarang, :id_penerbit, :tanggal_terbit, :sinopsis, :stok_buku, :status)";

        $this->db->query($query);
        $this->db->bind('isbn', $data['isbn']);
        $this->db->bind('gambar_buku', $data['gambar_buku']);
        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('id_penerbit', $data['id_penerbit']);
        $this->db->bind('tanggal_terbit', $data['tanggal_terbit']);
        $this->db->bind('sinopsis', $data['sinopsis']);
        $this->db->bind('stok_buku', $data['stok_buku']);
        $this->db->bind('status', $data['status']);

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

    public function hapusDataBuku($id){
        $query = "DELETE FROM buku WHERE isbn = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getBukuById($id)
{
    $this->db->query('SELECT buku.*, kategori.kategori, penerbit.nama_penerbit
                      FROM buku
                      JOIN kategori ON buku.id_kategori = kategori.id_kategori
                      JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
                      WHERE buku.isbn = :id');
    $this->db->bind('id', $id);
    return $this->db->single();
}

public function updateBuku($data, $gambar)
{
    $query = "UPDATE buku SET
                gambar_buku = :gambar,
                judul = :judul,
                id_kategori = :id_kategori,
                id_penerbit = :id_penerbit,
                pengarang = :pengarang,
                tanggal_terbit = :tanggal_terbit,
                sinopsis = :sinopsis,
                stok_buku = :stok_buku,
                status = :status
              WHERE isbn = :isbn";

    $this->db->query($query);
    $this->db->bind(':isbn', $data['isbn']);
    $this->db->bind(':gambar', $gambar);
    $this->db->bind(':judul', $data['judul']);
    $this->db->bind(':id_kategori', $data['id_kategori']);
    $this->db->bind(':id_penerbit', $data['id_penerbit']);
    $this->db->bind(':pengarang', $data['pengarang']);
    $this->db->bind(':tanggal_terbit', $data['tanggal_terbit']);
    $this->db->bind(':sinopsis', $data['sinopsis']);
    $this->db->bind(':stok_buku', $data['stok_buku']);
    $this->db->bind(':status', $data['status']);

    $this->db->execute();

    return $this->db->rowCount();
}


public function cariDataBuku($keyword)
{
    // Persiapkan query untuk mencari buku berdasarkan judul, pengarang, atau kategori
    $query = "SELECT buku.*, kategori.kategori, penerbit.nama_penerbit
              FROM buku
              JOIN kategori ON buku.id_kategori = kategori.id_kategori
              JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
              WHERE buku.judul LIKE :keyword OR penerbit.nama_penerbit LIKE :keyword OR kategori.kategori LIKE :keyword";

    // Bind parameter kata kunci ke dalam query
    $this->db->query($query);
    $this->db->bind(':keyword', "%$keyword%");

    // Eksekusi query dan kembalikan hasilnya
    return $this->db->resultSet();
}


public function getBukuByKategoriNovel() {
    $query = "SELECT buku.gambar_buku, buku.judul, buku.isbn, penerbit.nama_penerbit
              FROM buku
              JOIN kategori ON buku.id_kategori = kategori.id_kategori
              JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
              WHERE kategori.kategori = 'Novel/Fiksi'";

    $this->db->query($query);
    return $this->db->resultSet();
}

public function getBukuByKategoriAgama() {
    $query = "SELECT buku.gambar_buku, buku.judul, buku.isbn, penerbit.nama_penerbit
              FROM buku
              JOIN kategori ON buku.id_kategori = kategori.id_kategori
              JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
              WHERE kategori.kategori = 'Agama'";

    $this->db->query($query);
    return $this->db->resultSet();
}

public function getBukuByKategoriPendidikan() {
    $query = "SELECT buku.gambar_buku, buku.judul, buku.isbn, penerbit.nama_penerbit
              FROM buku
              JOIN kategori ON buku.id_kategori = kategori.id_kategori
              JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
              WHERE kategori.kategori = 'Pendidikan'";

    $this->db->query($query);
    return $this->db->resultSet();
}

public function getBukuByKategoriBisnis() {
    $query = "SELECT buku.gambar_buku, buku.judul, buku.isbn, penerbit.nama_penerbit
              FROM buku
              JOIN kategori ON buku.id_kategori = kategori.id_kategori
              JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
              WHERE kategori.kategori = 'Bisnis'";

    $this->db->query($query);
    return $this->db->resultSet();
}

public function getBukuByKategoriHukum() {
    $query = "SELECT buku.gambar_buku, buku.judul, buku.isbn, penerbit.nama_penerbit
              FROM buku
              JOIN kategori ON buku.id_kategori = kategori.id_kategori
              JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
              WHERE kategori.kategori = 'Hukum'";

    $this->db->query($query);
    return $this->db->resultSet();
}


public function getBukuByISBN($isbn)
    {
        $query = "SELECT buku.*, kategori.kategori, penerbit.nama_penerbit 
                  FROM {$this->table} buku
                  LEFT JOIN kategori ON buku.id_kategori = kategori.id_kategori
                  LEFT JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
                  WHERE isbn = :isbn";
        $this->db->query($query);
        $this->db->bind(':isbn', $isbn);
        return $this->db->single();
    }

    public function cariBukuByJudulnovel($keyword)
    {
        // Query untuk mencari buku berdasarkan judul
        $query = "SELECT buku.*, penerbit.nama_penerbit, kategori.kategori 
        FROM buku 
        JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
        JOIN kategori ON buku.id_kategori = kategori.id_kategori
        WHERE buku.judul LIKE :judul AND kategori.kategori = 'Novel/Fiksi'";

        // Bind parameter judul ke dalam query
        $this->db->query($query);
        $this->db->bind(':judul', '%' . $keyword . '%');

        // Eksekusi query dan kembalikan hasil
        return $this->db->resultSet();
    }

    public function cariBukuByJudulagama($keyword)
    {
        // Query untuk mencari buku berdasarkan judul
        $query = "SELECT buku.*, penerbit.nama_penerbit, kategori.kategori 
        FROM buku 
        JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
        JOIN kategori ON buku.id_kategori = kategori.id_kategori
        WHERE buku.judul LIKE :judul AND kategori.kategori = 'Agama'";

        // Bind parameter judul ke dalam query
        $this->db->query($query);
        $this->db->bind(':judul', '%' . $keyword . '%');

        // Eksekusi query dan kembalikan hasil
        return $this->db->resultSet();
    }

    public function cariBukuByJudulpendidikan($keyword)
    {
        // Query untuk mencari buku berdasarkan judul
        $query = "SELECT buku.*, penerbit.nama_penerbit, kategori.kategori 
        FROM buku 
        JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
        JOIN kategori ON buku.id_kategori = kategori.id_kategori
        WHERE buku.judul LIKE :judul AND kategori.kategori = 'Pendidikan'";

        // Bind parameter judul ke dalam query
        $this->db->query($query);
        $this->db->bind(':judul', '%' . $keyword . '%');

        // Eksekusi query dan kembalikan hasil
        return $this->db->resultSet();
    }

    public function cariBukuByJudulbisnis($keyword)
    {
        // Query untuk mencari buku berdasarkan judul
        $query = "SELECT buku.*, penerbit.nama_penerbit, kategori.kategori 
        FROM buku 
        JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
        JOIN kategori ON buku.id_kategori = kategori.id_kategori
        WHERE buku.judul LIKE :judul AND kategori.kategori = 'Bisnis'";

        // Bind parameter judul ke dalam query
        $this->db->query($query);
        $this->db->bind(':judul', '%' . $keyword . '%');

        // Eksekusi query dan kembalikan hasil
        return $this->db->resultSet();
    }

    public function cariBukuByJudulhukum($keyword)
    {
        // Query untuk mencari buku berdasarkan judul
        $query = "SELECT buku.*, penerbit.nama_penerbit, kategori.kategori 
        FROM buku 
        JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
        JOIN kategori ON buku.id_kategori = kategori.id_kategori
        WHERE buku.judul LIKE :judul AND kategori.kategori = 'Hukum'";

        // Bind parameter judul ke dalam query
        $this->db->query($query);
        $this->db->bind(':judul', '%' . $keyword . '%');

        // Eksekusi query dan kembalikan hasil
        return $this->db->resultSet();
    }

}
?>
