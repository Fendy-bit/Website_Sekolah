

<?php
include 'koneksi.php';
$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
		$s = mysqli_fetch_object($peserta);
 ?>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script>
	 	window.print();
	 </script>

<div class="header1">
    <div class="container1">
      <div class="header-logo1">
        <img src="uploads/identitas/logo-smk.png" width="70px">
        <h2><a href="index.php">SMKN 1 Jakarta</a></h2>
      </div>
     
    </div>
  </div>

	<h2>Bukti Pendaftaran</h2>
	<table class="table-data" border="0">
		<tr>
			<td>Kode Pendaftaran</td>
			<td>:</td>
			<td><?php echo $s->id_pendaftaran?></td>

		</tr>

		<tr>
			<td>Tahun Ajaran</td>
			<td>:</td>
			<td><?php echo $s->th_ajaran?></td>

		</tr>

		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><?php echo $s->jurusan?></td>

		</tr>

		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $s->nm_peserta?></td>

		</tr>

		<tr>
			<td>Tempat, Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $s->tmp_lahir.','.$s->tgl_lahir ?></td>

		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $s->jk?></td>

		</tr>

		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><?php echo $s->agama?></td>

		</tr>

		<tr>
			<td>alamat</td>
			<td>:</td>
			<td><?php echo $s->almt_peserta?></td>

		</tr>
	</table>


