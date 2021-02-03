<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="db_babaong";

	//membuat koneksi
	$conn = new mysqli($servername, $username, $password, $database);
	//mengecek koneksi
	if (!$conn) {
		# code...
		die("koneksi gagal: " . mysqli_connect_error());
	}
?>