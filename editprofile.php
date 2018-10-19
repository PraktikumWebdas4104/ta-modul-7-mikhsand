<center><h1>Edit Profile</h1></center>
<form action=" " method="POST">
		<table align="center">
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
			<td><input type="submit" name="submit" value="Update">
			<td></td>
			<td><button><a href="index.php">Halaman Data Mahasiswa</a></button></td>
		</tr>
	</table>
	</form>


<?php

	$nim=$_GET['nim'];
	if (isset($_POST['submit'])) {
		$conn = mysqli_connect("localhost", "root", "", "mahasiswa");

	$namabaru=$_POST['nama'];
	$kelbaru=$_POST['kelamin'];
	$prodibaru=$_POST['prodi'];
	$fakbaru=$_POST['fakultas'];
	$asalbaru=$_POST['asal'];
	$mottobaru=$_POST['motto'];

	mysqli_query($conn, "UPDATE datamhs 
							SET nama='$namabaru', jenis_kelamin='$kelbaru', prodi='$prodibaru', fakultas='$fakbaru', 
								asal='$asalbaru', motto='$mottobaru'
							WHERE nim='".$nim."'");
	header("location:index.php");
	}
?>