<?php
	include 'koneksi.php';
	date_default_timezone_set("Asia/Jakarta");

	$identitas = mysqli_query($conn, " SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
	$d = mysqli_fetch_object($identitas);

	if(isset($_POST['submit'])){

		//ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");

		$s = mysqli_fetch_object($getMaxId);
		$generateId = 'P'.date('Y').sprintf("%05s", $s->id + 1);
		//proses insert
		$insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (

			'".$generateId."', 
			'".date('Y-m-d')."',
			'".$_POST['th_ajaran']."',
			'".$_POST['jurusan']."',
			'".$_POST['nm']."',
			'".$_POST['tmp_lahir']."',
			'".$_POST['tgl_lahir']."',
			'".$_POST['jk']."',
			'".$_POST['agama']."',
			'".$_POST['alamat']."'

			)");

		if($insert){
			echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
		}else{
			echo 'huft'.mysqli_error($conn);
		}


		}

		

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website <?= $d->nama ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="header1">
    <div class="container1">
      <div class="header-logo1">
        <img src="uploads/identitas/logo-smk.png" width="70px">
        <h2><a href="index.php">SMKN 1 Jakarta</a></h2>
      </div>
      <ul class="header-menu1">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
        <li class="dropdown1">
          <a href="jurusan.php">Jurusan <i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-content1">
            <li><a href="http://localhost/sekolah/detail-jurusan.php?id=5">TKJ</a></li>
            <li><a href="http://localhost/sekolah/detail-jurusan.php?id=4">Multimedia</a></li>
            <li><a href="http://localhost/sekolah/detail-jurusan.php?id=2">Kelistrikan</a></li>
            <li><a href="http://localhost/sekolah/detail-jurusan.php?id=1">RPL</a></li>
          </ul>
        </li>
        <li><a href="galeri.php">Galeri</a></li>
        <li class="dropdown1">
        	<a href="informasi.php">Informasi <i class="fa fa-caret-down"></i></a>
        	<ul class="dropdown-content1">
        		<li><a href="http://localhost/sekolah/informasi.php">Berita</a></li>
            <li><a href="detail-ppdb.php">PPDB</a></li> 
            
        	</ul>
        </li>
        <li><a href="kontak.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</body>


<!-- <body class="body-color">
	
		 bagian header
	<div class="header">

		<div class="container">
			
			<div class="header-logo">
				<img src="uploads/identitas/<?= $d->logo ?>" width= "70px">
				<h2><a href="index.php"><?= $d->nama ?></a></h2>

			</div>

			<ul class="header-menu">
				<li><a href="index.php">Beranda</li>
				<li><a href="tentang-sekolah.php">Tentang Sekolah</li>
				<li>
					<a href="#">jurusan <i class="fa fa-caret-down"></i></a>
					<ul class="dropdown">
						<li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
						<li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
					</ul>
				</li>
				<li><a href="galeri.php">Galeri</li>
				<li><a href="informasi.php">Informasi</li>
				<li><a href="kontak.php">Kontak</li></a>
			
			</ul>

		</div>
		

	</div>

</body> -->

<!-- <nav class="menu">
		<div class="container">
			<div class="header-logo">
				<img src="uploads/identitas/<?= $d->logo ?>" width= "70px">
				<h2><a href="index.php"><?= $d->nama ?></a></h2>

			</div>
		<ul>
			<li><a href="index.php">Beranda</a></li>
			<li><a href="#">Tentang Sekolah</a></li>
			<li><a href="#">Jurusan</a>
				<ul class="dropdown1">
					<li><a href="#">dtycncy</a></li>
					<li><a href="#">dtycncy</a></li>
					<li><a href="#">dtycncy</a></li>

				</ul>
			</li>
			<li><a href="#">Galeri</a></li>
			<li><a href="#">Informasi</a></li>
			<li><a href="#">kontak</a></li>


		</ul>
		</div>

	</nav> -->
