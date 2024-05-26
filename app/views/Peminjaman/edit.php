<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Peminjaman</h1>
                </div>
                <div class="col-sm-6">
                    <!--  -->
                </div><!-- /.col -->
            </div>

            <nav class="navbar navbar-expand-lg mb-2">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end">
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
                <form class="row g-3" action="<?= BASEURL; ?>/Peminjaman/update" method="post">
                    <input type="hidden" name="id" value="<?= $data['peminjaman']['id_peminjaman'] ?>">

                    <div class="col-md-6">
                        <label for="nim" class="form-label">NIM</label>
                        <select class="form-control border border-primary-subtle border-2" id="nim" name="nim">
                            <?php foreach ($data['anggota'] as $anggota) : ?>
                                <option value="<?= $anggota['nim']; ?>" <?= $anggota['nim'] == $data['peminjaman']['nim'] ? 'selected' : ''; ?>><?= $anggota['nim']; ?> - <?= $anggota['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="isbn" class="form-label">ISBN</label>
                        <select class="form-control border border-primary-subtle border-2" id="isbn" name="isbn">
                            <?php foreach ($data['buku'] as $buku) : ?>
                                <option value="<?= $buku['isbn']; ?>" <?= $buku['isbn'] == $data['peminjaman']['isbn'] ? 'selected' : ''; ?>><?= $buku['isbn']; ?> - <?= $buku['judul']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control border border-primary-subtle border-2" id="tanggal_peminjaman" name="tanggal_peminjaman" value="<?= $data['peminjaman']['tanggal_peminjaman'] ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="tanggal_pengembalian_rencana" class="form-label">Tanggal Pengembalian Rencana</label>
                        <input type="date" class="form-control border border-primary-subtle border-2" id="tanggal_pengembalian_rencana" name="tanggal_pengembalian_rencana" value="<?= $data['peminjaman']['tanggal_pengembalian_rencana'] ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="banyak_buku" class="form-label">Banyak Buku</label>
                        <input type="number" class="form-control border border-primary-subtle border-2" id="banyak_buku" name="banyak_buku" value="<?= $data['peminjaman']['banyak_buku'] ?>" min="1">
                    </div>

                    <div class="col-6">
                        <a href="<?= BASEURL; ?>/Peminjaman" type="button" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
