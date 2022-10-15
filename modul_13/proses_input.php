<?php
include('teskon.php');
$teskon = new database();

$action = $_GET['action'];
if($action == "add") {
    $teskon->tambah_data($_POST['nim'],$_POST['nama'],$_POST['email'],$_POST['hp'],$_POST['prodi']);
    header('location:tampil_data.php');
} elseif($action == "update") {
	$teskon->update_data($_POST['nama'],$_POST['email'],$_POST['hp'],$_POST['prodi'],$_POST['nim']);
    header('location:tampil_data.php');
} elseif($action == "delete") {
	$nim = $_GET['x'];
	$teskon->delete_data($nim);
	header('location:tampil_data.php');
}
?>