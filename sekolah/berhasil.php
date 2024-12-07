	<?php include 'header.php'; ?>

	<!--Box formulir-->
	<section class="box-formulir">

		<h2>Pendaftaran Berhasil</h2>

		<div class="box1">
			
			<h4>Kode Pendaftaran Anda Adalah <?php echo $_GET['id'] ?></h4>
			<a href="cetak-bukti.php?id=<?php echo $_GET['id']?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>

		</div>

		

	</section>


	<?php include 'footer.php'; ?>