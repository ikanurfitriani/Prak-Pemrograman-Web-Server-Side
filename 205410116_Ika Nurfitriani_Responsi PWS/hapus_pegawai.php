<?php
require 'koneksi.php';

$Id = $_GET['Id'];

$result = mysqli_query($koneksi, "DELETE FROM pegawai WHERE Id='$Id'");
	
header('Location: tampil_pegawai.php');
?>