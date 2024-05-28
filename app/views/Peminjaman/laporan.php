<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .title {
            text-align: center;
            margin-bottom: 30px;
        }
        .periode {
            text-align: center;
            margin-bottom: 20px;
        }

        @media print {
            .title, .periode {
                display: block !important;
            }
            .container {
                margin-top: 50px;
            }
            .row {
                display: flex;
                flex-wrap: wrap;
            }
            .col-md-6 {
                width: 50%;
                float: left;
            }
            .text-right {
                text-align: right;
                float: right !important;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title m-0 fs-1"><?= $data['title'] ?></h1>
        <p class="periode"><?= $data['periode'] ?></p>
        <table class="table table-bordered">
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
                        <td><?= $peminjaman['status'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <p class="m-0">Disetujui oleh,</p>
                <p>Ketua Perpustakaan</p><br><br>
                <p>_____________________</p>
            </div>
            <div class="col-md-6 text-right">
                <span class="m-0"><?= $data['location'] ?>, </span>
                <span class="m-0"><?= $data['date'] ?></span><br>
                <span class="">Dibuat oleh</span><br>
                <span><?= $data['username'] ?></span><br><br>
                <p>_____________________</p>
            </div>
        </div>

        <button class="btn btn-primary no-print" onclick="window.print()">Print Laporan</button>
    </div>
</body>
</html>
