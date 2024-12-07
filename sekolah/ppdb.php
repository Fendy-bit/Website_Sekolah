	<?php include 'header.php'; ?>
	
	<!--Box formulir-->
	<section class="box-formulir">

		<h2>Formulir Pendaftaran Siswa Baru</h2>

		<!--bagian form-->
		<form action="" method="post">
			
			<div class="box1">
				<table border="0" class="table-form">
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>
							<input type="text" name="th_ajaran" class="input-control1" value="2023/2024" readonly>
						</td>
					</tr>

					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td>
							<select class="input-control1" name="jurusan">
								<option value="">--Pilih--</option>
								<option value="Tkj">--Tkj--</option>
								<option value="Multimedia">--Multimedia--</option>
								<option value="Kelistrikan">--Kelistrikan--</option>
								<option value="RPL">--RPL--</option>
							</select>
						</td>
					</tr>
				</table>
			</div>

			<h3>Data Diri Calon Siswa</h3>

			<div class="box1">
				<table border="0" class="table-form">
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>
							<input type="text" name="nm" class="input-control1">
						</td>
					</tr>

					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>
							<input type="text" name="tmp_lahir" class="input-control1">
						</td>
					</tr>

					<tr>
						<td>Tanggal Lahir/td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_lahir" class="input-control1">
						</td>
					</tr>

					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jk" class="input-control1" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
							<input type="radio" name="jk" class="input-control1" value="Perempuan"> Perempuan
						</td>
					</tr>

					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>
							<select class="input-control1" name="agama">
								<option value="">--Pilih--</option>
								<option value="Islam">--Islam--</option>
								<option value="Hindu">--Hindu--</option>
								<option value="Kristen">--Kristen--</option>
								<option value="Katolik">--Katolik--</option>
								<option value="Buddha">--Buddha--</option>
								<option value="Khonghucu">--Khonghucu--</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Alamat Lengkap</td>
						<td>:</td>
						<td>
							<textarea class="input-control1" name="alamat"></textarea>
						</td>
					</tr>

					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
						</td>
					</tr>
				</table>
			</div>


		</form>
		

	</section>

	<?php include 'footer.php'; ?>