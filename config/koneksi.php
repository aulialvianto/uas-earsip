<?php

	//buat koneksi database

	//persiapan identitas server
	$hostname 	= "10.0.0.149";
	$username	= "admin";
	$pass		= "12345";
	$database 	= "dbarsip";

	$koneksi = mysqli_connect($hostname, $username, $pass, $database) or die(mysqli_error($koneksi));

?>