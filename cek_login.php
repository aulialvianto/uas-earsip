<?php
session_start();
include "config/koneksi.php";
$username=$_POST['username']; 
$password=$_POST['pass']; 
$pas=md5($pass);
$query=mysqli_query($conn,"select * from tbl_user where uname='$username' and pass='$password'");
if($data)
{
	$_SESSION['id_user'] = $data['id_user'];
	$_SESSION['username'] = $data['username'];
	header('location:admin.php');
}
else
{
	echo "<script>
			alert('Maaf, Login GAGAL, pastikan username dan password anda Benar..!');
			document.location='index.php';
		  </script>";
}
 ?> 