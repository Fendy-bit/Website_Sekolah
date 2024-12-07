	<?php include 'header.php'; ?>
	
	<div class="section" style="background-color:#dcebfa">
		
		<div class="container">
			<h3 class="text-center">Galeri</h3>

			<?php
				$informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC"); 
					if(mysqli_num_rows($informasi) > 0){
						while ($p = mysqli_fetch_array($informasi)) {
			?>

				<div class="col-4">
					<a href="uploads/informasi/<?= $p['gambar'] ?>" target="_blank" class="thumbnail-link">

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

	<?php include 'footer.php'; ?>