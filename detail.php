<?php
	
	$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
	$nim = $_GET['nim'];

	$query=mysqli_query($conn,"SELECT * FROM datamhs WHERE nim='".$nim."'");
		$result=mysqli_fetch_array($query);

		echo "<center><h2>Detail Mahasiswa</h2></center>";
		echo "<table border=1 align=center>
			<tr>
				<th>Nim</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Program Studi</th>
				<th>Fakultas</th>
				<th>Asal</th>
				<th>Motto Hidup</th>
				<th>Aksi</th>
			</tr>";

		foreach($query as $hsl) {
			
			echo "<tr>
				<td>".$hsl["nim"]."</td>
				<td>".$hsl["nama"]."</td>
				<td>".$hsl["jenis_kelamin"]."</td>
				<td>".$hsl["prodi"]."</td>
				<td>".$hsl["fakultas"]."</td>
				<td>".$hsl["asal"]."</td>
				<td>".$hsl["motto"]."</td>
				<td><button><a href='hapus.php?nim=".$result['nim']."'>Hapus</a></button>
					<button><a href='editprofile.php?nim=".$result['nim']."'>Edit</a></button></td>
				</tr>";
		echo "</table><br><br>";
		}
?>