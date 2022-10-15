<?php
$namaFile = $_FILES['file']['name'];
$tampung_file = $_FILES['file']['tmp_name'];

$dirUpload = "folder_anda/";
$folder_anda = move_uploaded_file($tampung_file, $dirUpload.$namaFile);

if($folder_anda) {
	echo "Upload berhasil!<br/>";
	echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a";
} else {
	echo "Upload Gagal!";
}
?>