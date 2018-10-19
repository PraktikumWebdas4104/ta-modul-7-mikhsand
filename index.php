<center><h2>Halaman Data Mahasiswa</h2></center><br><br>
<?php

	include "koneksi.php";

	$sql="SELECT * FROM datamhs";
	$hasil=mysqli_query($conn,$sql);
	$result=mysqli_fetch_array($hasil);

		echo "<table border=1 align=center>
			<tr style='background:grey;'>
			<tr>
				<th>Nim</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Program Studi</th>
				<th>Fakultas</th>
				<th>Asal</th>
				<th>Motto Hidup</th>
			<tr>";

	foreach ($hasil as $hsl){

		echo "<tr>
				<td>".$hsl["nim"]."</td>
				<td>".$hsl["nama"]."</td>
				<td>".$hsl["jenis_kelamin"]."</td>
				<td>".$hsl["prodi"]."</td>
				<td>".$hsl["fakultas"]."</td>
				<td>".$hsl["asal"]."</td>
				<td>".$hsl["motto"]."</td>
			</tr>";		
	}
		echo "<table align=center><tr><td><button><a href='form.php'>Input data mahasiswa</a></button></td>
		<td><button><a href='cari.php'>Cari data mahasiswa</a></button></center></td></tr></table>";
?>