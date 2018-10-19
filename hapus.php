<?php
	$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
	$nim = $_GET['nim'];
	mysqli_query($conn, "DELETE FROM datamhs WHERE nim = '".$nim."'");
	header("location:index.php");
?>