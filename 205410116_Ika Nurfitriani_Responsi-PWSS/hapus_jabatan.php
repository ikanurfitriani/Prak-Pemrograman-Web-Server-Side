<?php
require 'koneksi.php';

$Kode_Jabatan = $_GET['Kode_Jabatan'];

$result = mysqli_query($koneksi, "DELETE FROM jabatan WHERE
Kode_Jabatan='$Kode_Jabatan'");

header('Location: tampil_jabatan.php');
?>