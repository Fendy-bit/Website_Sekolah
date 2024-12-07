	<?php include 'header.php'; ?>
	<!--banner-->
	<div class="banner" style="background-image: url('https://images.pexels.com/photos/1516440/pexels-photo-1516440.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"><!--uploads/identitas/<?= $d->foto_sekolah ?>-->
		<div class="banner-text">
			<div class="container">
				<h3>Selamat Datang di <?= $d->nama ?></h3>
				<p>Sekolah Menenggah Kejuruan dengan Berbagai Jurusan</p>
			</div>
		</div>

	</div>


	<!--bagian sambutan-->
	<div class="section" style="background-color: #aed7fc;">
		
		<div class="container text-center">
			
			<h3>Sambutan Kepala Sekolah</h3>
			<img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="150px">
			<h4><?= $d->nama_kepsek ?></h4>
			<p><?= $d->sambutan_kepsek ?></p>

		</div>

	</div>

	<!--bagian jurusan-->
	<div class="section" id="jurusan">
		
		<div class="container text-center">
			<h3>Jurusan</h3>

			<?php
				$jurusan = mysqli_query($conn, "SELECT * FROM jurusan ORDER BY id DESC");
				if(mysqli_num_rows($jurusan) > 0){ 
					while($j = mysqli_fetch_array($jurusan)){
			?>

				<div class="col-4">
					<a href="detail-jurusan.php?id=<?= $j['id'] ?>" class="thumbnail-link">

					<div class="thumbnail-box">
						<div class="thumbnail-img" style="background-image: url('uploads/jurusan/<?= $j['gambar'] ?>');">
							
						</div>

						<div class="thumbnail-text">
							<?= $j['nama'] ?>
						</div>
						
					</div>
					</a> 

				</div>

			<?php }}else{ ?>

				Tidak Ada Data

			<?php }?>
		</div>

	</div>


	<!--bagian informasi-->
	<div class="section" style="background-color: #e0f0ff">
		
		<div class="container text-center" >
			<h3>Informasi Terbaru</h3>

			<?php
				$informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC LIMIT 8"); 
				if(mysqli_num_rows($informasi) > 0){
					while ($p = mysqli_fetch_array($informasi)) {
			?>

				<div class="col-4">
					<a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbnail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">
							
						</div>

						<div class="thumbnail-text">
							<?= substr($p['judul'], 0, 50) ?>
						</div>
						
					</div>
					</a>

				</div>

			<?php }}else{ ?>

				Tidak Ada Data

			<?php }?>

		</div>


	</div>

	<!--social-attach-bar-->
    <div class="social">
        <a href="https://wa.me/;6281311449722"><i class="fab fa-whatsapp"></i></a>
        <a href="<?= $d->alamat ?>"><i class="fa fa-map-marker"></i></a>
        <a href="<?= $d->email ?>"><i class="fa fa-envelope-o"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>

	<?php include 'footer.php'; ?>
	