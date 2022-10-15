<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$hp = $_POST['hp'];

mysqli_query($koneksi,"insert into mahasiswa
			values('$nim','$nama','$email','$hp')");

header("location:index.php");
?>