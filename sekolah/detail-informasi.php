	<?php include 'header.php'; ?>
	
	<div class="section" style="background-color: #e0f0ff">
		
		<div class="container" >

			<?php

				$informasi = mysqli_query($conn, "SELECT * FROM informasi LEFT JOIN pengguna ON pengguna.id = informasi.created_by WHERE informasi.id = '".$_GET['id']."' ");

					if(mysqli_num_rows($informasi) == 0){
						echo "<script>window.location='index.php'</script>";
					}

					$p        = mysqli_fetch_object($informasi);;

			?>

			<h3 class="text-center"><?= $p->judul ?></h3>
			<small>Dibuat pada <?= date('d/m/Y', strtotime($p->created_at)) ?>, Oleh <?= $p->nama ?></small>			<img src="uploads/informasi/<?= $p->gambar ?>" width="100%" class="image" style="margin-top: 5px;">
			<div class="border"><?= $p->keterangan ?></div>
		</div>

	</div>

	<?php include 'footer.php'; ?>