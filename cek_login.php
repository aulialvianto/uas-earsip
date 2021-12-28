<?php
session_start();
include "config/koneksi.php";

//contoh login sederhana, bisa dikembang lagi

//password diamankan dengan enkripsi kriptografi md5
@$pass = md5($_POST['12345']);

//mysqli_escape_string fungsinya untuk mengamankan karakter aneh yang diinputkan user, seperti sql injection

@$username = ($_POST['admin']);
@$password = ($pass);

$login = mysqli_query($koneksi, "SELECT * from tbl_user WHERE username='$username' and password = '$password' ");
$data = mysqli_fetch_array($login);
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