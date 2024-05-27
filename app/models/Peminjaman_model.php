<?php 
class Peminjaman_model
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
        $query = 'SELECT peminjaman.*, anggota.nim, anggota.nama, buku.isbn, buku.judul
                  FROM ' . $this->table . ' 
                  JOIN anggota ON peminjaman.nim = anggota.nim 
                  JOIN buku ON peminjaman.isbn = buku.isbn';
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahDataPeminjaman($data)
    {
        $query = "INSERT INTO peminjaman (nim, isbn, tanggal_peminjaman, tanggal_pengembalian_rencana, banyak_buku, status) 
        VALUES (:nim, :isbn, :tanggal_peminjaman, :tanggal_pengembalian_rencana, :banyak_buku, 'dipinjam')";
        
        $this->db->query($query);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':isbn', $data['isbn']);
        $this->db->bind(':tanggal_peminjaman', $data['tanggal_peminjaman']);
        $this->db->bind(':tanggal_pengembalian_rencana', $data['tanggal_pengembalian_rencana']);
        $this->db->bind(':banyak_buku', $data['banyak_buku']);
        
        // Execute query
        $this->db->execute();
        
        
        // Return row count
        return $this->db->rowCount();
    }


    public function updatePinjamBuku($isbn, $banyakBuku)
    {
        $query = 'UPDATE buku SET stok_buku = stok_buku - :banyak_buku WHERE isbn = :isbn';
        $this->db->query($query);
        $this->db->bind(':banyak_buku', $banyakBuku); // Menggunakan operasi penambahan di sini
        $this->db->bind(':isbn', $isbn);
        $this->db->execute();
        return $this->db->rowCount();
    }
    


    public function hapusDataPeminjaman($id)
    {

        // Hapus data peminjaman
        $query = 'DELETE FROM ' . $this->table . ' WHERE id_peminjaman = :id';
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function kembalikanBuku($id)
    {
        $peminjaman = $this->getPeminjamanById($id);
        $this->updateStokBuku($peminjaman['isbn'], $peminjaman['banyak_buku']);
    
        $query = 'UPDATE ' . $this->table . ' SET status = "dikembalikan", tanggal_pengembalian_aktual = NOW() WHERE id_peminjaman = :id';
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getPeminjamanById($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id_peminjaman = :id';
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function updateStokBuku($isbn, $jumlah)
{
    $query = 'UPDATE buku SET stok_buku = stok_buku + :jumlah WHERE isbn = :isbn';
    $this->db->query($query);
    $this->db->bind(':isbn', $isbn);
    $this->db->bind(':jumlah', $jumlah);
    $this->db->execute();
}


    public function updateDataPeminjaman($data)
    {
        $peminjamanLama = $this->getPeminjamanById($data['id']);
        $banyakBukuLama = $peminjamanLama['banyak_buku'];
        $banyakBukuBaru = $data['banyak_buku'];
        $selisihBuku = $banyakBukuBaru - $banyakBukuLama;

        // Update stok buku
        $this->updateStokBuku($peminjamanLama['isbn'], -$selisihBuku);

        $query = 'UPDATE ' . $this->table . ' SET 
                  nim = :nim, 
                  isbn = :isbn, 
                  tanggal_peminjaman = :tanggal_peminjaman, 
                  tanggal_pengembalian_rencana = :tanggal_pengembalian_rencana, 
                  banyak_buku = :banyak_buku 
                  WHERE id_peminjaman = :id';

        $this->db->query($query);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':isbn', $data['isbn']);
        $this->db->bind(':tanggal_peminjaman', $data['tanggal_peminjaman']);
        $this->db->bind(':tanggal_pengembalian_rencana', $data['tanggal_pengembalian_rencana']);
        $this->db->bind(':banyak_buku', $data['banyak_buku']);
        $this->db->bind(':id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>
