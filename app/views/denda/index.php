<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2">Data Denda</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/Denda">Data Denda</a></li>
                <li class="breadcrumb-item active"><a href="https://polmed.ac.id/">Politeknik Negeri Medan</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        
        <div class="row">
          <div class="col-6">
            <?php Flasher::flash(); ?>
          </div>
        </div>

        <div class="container-fluid">
            <table class="table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>ID Peminjaman</th>
                    <th>NIM</th>
                    <th>Nama Anggota</th>
                    <th>ISBN</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian Aktual</th>
                    <th>Jumlah Hari Terlambat</th>
                    <th>Total Denda</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $num = 1; ?>
                <?php foreach ($data['denda'] as $denda) : ?>
                    <tr>
                        <td><?= $num++; ?></td>
                        <td><?= $denda['id_peminjaman'] ?></td>
                        <td><?= $denda['nim'] ?></td>
                        <td><?= $denda['nama'] ?></td>
                        <td><?= $denda['isbn'] ?></td>
                        <td><?= $denda['judul'] ?></td>
                        <td><?= $denda['tanggal_peminjaman'] ?></td>
                        <td><?= $denda['tanggal_pengembalian_aktual'] ?></td>
                        <td><?= $denda['jumlah_hari_terlambat'] ?></td>
                        <td><?= $denda['total_denda'] ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/Denda/hapus/<?= $denda['id_denda']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
