<?php
require '../koneksi.php';

$kode_prodi = $_GET['kode_prodi'];

$result = mysqli_query($koneksi, "DELETE FROM prodi WHERE
kode_prodi='$kode_prodi'");

header('Location: tampil_data.php');
?>