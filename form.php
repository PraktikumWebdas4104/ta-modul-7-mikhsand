<center><h2>Form Input</h2></center>
<br><br>
<form method="POST">
	<table align="center">
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim" maxlength="10"></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="kelamin" value="Pria">Pria
				<input type="radio" name="kelamin" value="Wanita">Wanita</td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>
				<select name="prodi">
					<option value="0">-------</option>
					<option value="Administrasi Bisnis">Administrasi Bisnis</option>
					<option value="Desain Interior">Desain Interior</option>
					<option value="Akuntansi">Akuntansi</option>
					<option value="Teknik Elektro">Teknik Elektro</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Sistem Infomasi">Sistem Infomasi</option>
					<option value="D3 Manajemen Perhotelan">D3 Manajemen Perhotelan</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<select name="fakultas">
					<option value="0">-------</option>
					<option value="Komunikasi dan Bisnis">Komunikasi dan Bisnis</option>
					<option value="Industri Kreatif">Industri Kreatif</option>
					<option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
					<option value="Teknik Elektro">Teknik Elektro</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Rekayasa Industri">Rekayasa Industri</option>
					<option value="Ilmu Terapan">Ilmu Terapan</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal"></td>
		</tr>

		<tr>
			<td>Motto Hidup</td>
			<td>:</td>
			<td><textarea name="motto"></textarea></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Kirim">
			<td></td>
			<td><button><a href="index.php">Halaman Data Mahasiswa</a></button></td>
		</tr>
	</table>
</form>

<?php
	
	if (isset($_POST['submit'])) {
		include 'koneksi.php';
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$kelamin=$_POST['kelamin'];
		$prodi=$_POST['prodi'];
		$fak=$_POST['fakultas'];
		$asal=$_POST['asal'];
		$motto=$_POST['motto'];

			$query= "INSERT INTO datamhs (nim, nama, jenis_kelamin, prodi, fakultas, asal, motto)
				VALUES ('$nim','$nama','$kelamin','$prodi', '$fak', '$asal', '$motto')";

				$hasil=mysqli_query($conn,$query);
				echo "data berhasil dikirim";
	}
?>