<?php
session_start();
include ('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query($koneksi, "SELECT username, password, nama FROM
		admin WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($sql);
$jum = mysqli_num_rows($sql);

if(!empty($data)){
	$_SESSION['username'] = $data['username'];
	$_SESSION['nama'] = $data['nama'];
	setcookie("message","delete",time()-1);
	header("location: welcome.php");
}else{
	setcookie("message", "Maaf, Username atau Password salah", time()+3600);
	header("location: index.php");
}
?>