	<?php include 'header.php'; ?>
	
	<div class="section" style="background-color: #e3faef">
		
		<div class="container">

			<?php

				$jurusan = mysqli_query($conn, "SELECT * FROM jurusan WHERE id = '".$_GET['id']."' ");

				if(mysqli_num_rows($jurusan) == 0){
					echo "<script>window.location='index.php'</script>";
				}

				$p  = mysqli_fetch_object($jurusan);

			?>

			<h3 class="text-center"><?= $p->nama ?></h3>
			<img src="uploads/jurusan/<?= $p->gambar ?>" width="100%" class="image">
			<div style="background-color: #e6f6fa;"><?= $p->keterangan ?></div>
		</div>

	</div>

	<?php include 'footer.php'; ?>