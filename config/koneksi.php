<?php

	//buat koneksi database

	//persiapan identitas server
	$hostname 	= "10.0.0.149";
	$username	= "admin";
	$pass		= "12345";
	$database 	= "dbarsip";

	$conn = mysqli_connect("$hostname","$username","$pass","$dbarsip");
	//koneksi database
	if(mysqli_connect())
	{
		echo "Failed to Connect Mysql" . mysqli_connect();
	}


?>