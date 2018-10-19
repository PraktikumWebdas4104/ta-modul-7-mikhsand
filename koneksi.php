<?php
	
	$conn=new mysqli("localhost","root","","mahasiswa");

		if (!$conn) {
			echo "koneksi gagal";
		}
?>