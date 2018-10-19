<center><h2>Cari Mahasiswa</h2></center><br><br>
<form  method="POST">
	<table align="center">
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim" maxlength="10"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Cari"></td>
			<td><button><a href="index.php">Back</a></button></td>
		</tr>
	</table>
</form>

<?php
	
	if (isset($_POST['submit'])) {
		$conn=new mysqli("localhost","root","","mahasiswa");
		$cari=$_POST['nim'];

		$query=mysqli_query($conn,"SELECT * FROM datamhs WHERE nim='".$cari."'");
		$result=mysqli_fetch_array($query);

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
					<button><a href='detail.php?nim=".$result['nim']."'>Detail</a></button></td>
				</tr>";
		echo "</table><br><br>";
		}
	}
?>