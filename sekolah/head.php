<?php
  include 'koneksi.php';
  date_default_timezone_set("Asia/Jakarta");

  $identitas = mysqli_query($conn, " SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
  $d = mysqli_fetch_object($identitas);

 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website <?= $d->nama ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* CSS untuk styling header */
   /* * {
      margin: 0;
      padding: 0;
      font-family: 'Quicksand', sans-serif;
      box-sizing: border-box;
    }*/

    .header1 {
      background-color: #fff008;
      padding: 10px;
      text-align: center;
      border: 1px solid;
    }

    .header1 a{
      color: #fff;
    }

    .container1 {
      display: flex;
      justify-content: space-between;
      align-items: center;
/*      border: 1px solid;*/
      margin: 0 50px;
    }

    .header-logo1 {
      display: flex;
      align-items: center;
/*      border: 1px solid;*/
      padding: 15px 30px;
      padding-left: 5px;
    }

    .header-logo1 h2 a{
      text-decoration: none;
    }

    .header-logo1 h2 a:hover{
      color: #f53137;

    }

    .header-logo1 img {
      width: 70px;
      margin-right: 10px;
/*      border: 1px solid;*/
    }

    .header-menu1 {
      list-style-type: none;
      margin: 10px 0;
      padding: 10px 5px;
      display: flex;
/*      border: 1px solid;*/
    }

    .header-menu1 li {
      margin-right: 10px;
      padding: 15px;
/*      border: 1px solid;*/
    }

    .header-menu1 li:hover{
/*      background-color: #145DA0;*/
    }

    .header-menu1 li a {
      text-decoration: none;
      color: #000;
      font-weight: bold;
/*      border: 1px solid;*/

    }

    .dropdown1 {
      position: relative;
      display: inline-block;
    }

    .dropdown-content1 {
      display: none;
      position: absolute;
      background-color: #fff;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      list-style: none;
      padding: 15px;
      background-color: #d9cc02;
      margin: 16px;
/*      border: 1px solid;*/
    }

    .dropdown1:hover .dropdown-content1 {
      display: block;
      color: #f53137;

    }

  </style>
</head>
<body>
  <div class="header">
    <div class="container">
      <div class="header-logo">
        <img src="uploads/identitas/logo-sekolah.png" width="70px">
        <h2><a href="index.php">SMKN 1 Jakarta</a></h2>
      </div>
      <ul class="header-menu">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
        <li class="dropdown">
          <a href="#">Jurusan <i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-content">
            <li><a href="identitas-sekolah.php">Teknik Komputer dan Jaringan</a></li>
            <li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
            <li>Ajhdg</li>
            <li>TKJ</li>
          </ul>
        </li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="informasi.php">Informasi</a></li>
        <li><a href="kontak.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</body>
</html>
