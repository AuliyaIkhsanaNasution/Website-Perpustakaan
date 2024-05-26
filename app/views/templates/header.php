

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $data['judul']; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BASEURL; ?>css/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= BASEURL; ?>css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= BASEURL; ?>css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= BASEURL; ?>css/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASEURL; ?>css/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= BASEURL; ?>css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= BASEURL; ?>css/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= BASEURL; ?>css/plugins/summernote/summernote-bs4.min.css">
  <!-- bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
        .featured-image {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Gaya untuk teks dengan warna dan latar belakang */
        .blue-bg {
            background-color: #3498db;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
        }
        .yellow-bg {
            background-color: #f39c12;
            color: white;
            padding: 4px;
            border-radius: 50%;
        }
        .green-bg {
            background-color: #2ecc71;
            color: white;
            padding: 4px;
            border-radius: 50%;
        }
        .red-bg {
            background-color: #e74c3c;
            color: white;
            padding: 4px;
            border-radius: 50%;
        }
        /* Gaya untuk kontainer baris dengan tata letak Flexbox */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        /* Gaya untuk kotak pencarian */
        #searchInput {
            padding: 8px;
            width: 250px;
            box-sizing: border-box;
        }
        /* Gaya untuk tombol Tambah Data */
        #addDataBtn {
            background-color: #3498db;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>