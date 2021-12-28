<?php

	//buat koneksi database

	//persiapan identitas server
	$server 	= "10.0.0.149"; //Nama Server
	$user 		= "admin"; //username database server
	$pass		= "12345"; //password database server
	$database 	= "dbarsip"; //Nama Database

	//koneksi database
	$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));


?>