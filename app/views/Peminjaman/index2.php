<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-2">Data Peminjaman</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= BASEURL; ?>Peminjaman">Data Peminjaman</a></li>
                        <li class="breadcrumb-item active"><a href="https://polmed.ac.id/">Politeknik Negeri Medan</a></li>
                    </ol>
                </div><!-- /.col -->
            </div>

            <div class="row">
                <div class="col-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <form action="<?= BASEURL; ?>/Peminjaman/Cari" method="post">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary btn-primary text-white" type="submit" id="tombolcari">Cari</button>
                                <input type="text" class="form-control border-primary-subtle border-2" placeholder="Cari Nama Anggota..." name="keyword" id="keyword" autocomplete="off">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formpeminjaman">
                            + Tambah Data Peminjaman
                        </button>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Anggota</th>
                            <th>ISBN</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian Rencana</th>
                            <th>Tanggal Pengembalian Aktual</th>
                            <th>Banyak Buku</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $num = 1; ?>
                        <?php foreach ($data['peminjaman'] as $peminjaman) : ?>
                            <tr>
                                <td><?= $num++; ?></td>
                                <td><?= $peminjaman['nim'] ?></td>
                                <td><?= $peminjaman['nama'] ?></td>
                                <td><?= $peminjaman['isbn'] ?></td>
                                <td><?= $peminjaman['judul'] ?></td>
                                <td><?= $peminjaman['tanggal_peminjaman'] ?></td>
                                <td><?= $peminjaman['tanggal_pengembalian_rencana'] ?></td>
                                <td><?= $peminjaman['tanggal_pengembalian_aktual'] ?></td>
                                <td><?= $peminjaman['banyak_buku'] ?></td>
                                <td class="status-peminjaman"><?= $peminjaman['status'] ?></td>
                                <td>
                                    <!-- Tombol Edit -->
                                    <a href="<?= BASEURL; ?>/Peminjaman/edit/<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-warning">Edit</a>
                                    <!-- Tombol Hapus -->
                                    <a href="<?= BASEURL; ?>/Peminjaman/hapus/<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                                    <!-- Tombol Kembalikan -->
                                    <a href="<?= BASEURL; ?>/Peminjaman/kembalikan/<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-success kembalikan-btn " onclick="return confirm('Apakah buku sudah dikembalikan?');">Kembalikan</a>
                                    <!-- Tombol Denda -->
                                    <a href="<?= BASEURL; ?>/Peminjaman/denda/<?= $peminjaman['id_peminjaman']; ?>" class="btn btn-info">Denda</a>
                                </td>



                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="formpeminjaman" tabindex="-1" aria-labelledby="formpeminjamanLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formpeminjamanLabel">Tambah Data Peminjaman</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= BASEURL; ?>/Peminjaman/tambah" method="post">
                                <div class="mb-3">
                                    <label for="nim" class="form-label">NIM</label>
                                    <select class="form-control" id="nim" name="nim">
                                        <?php foreach ($data['anggota'] as $anggota) : ?>
                                            <option value="<?= $anggota['nim']; ?>"><?= $anggota['nim']; ?> - <?= $anggota['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="isbn" class="form-label">ISBN</label>
                                    <select class="form-control" id="isbn" name="isbn">
                                        <?php foreach ($data['buku'] as $buku) : ?>
                                            <option value="<?= $buku['isbn']; ?>"><?= $buku['isbn']; ?> - <?= $buku['judul']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                                    <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_pengembalian_rencana" class="form-label">Tanggal Pengembalian Rencana</label>
                                    <input type="date" class="form-control" id="tanggal_pengembalian_rencana" name="tanggal_pengembalian_rencana">
                                </div>
                                <div class="mb-3">
                                    <label for="banyak_buku" class="form-label">Banyak Buku</label>
                                    <input type="number" class="form-control" id="banyak_buku" name="banyak_buku">
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

         
