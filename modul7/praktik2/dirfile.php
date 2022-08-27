<?php
$lokasi = dir("folder_anda");

while(($file_name = $lokasi->read()) !== false)
	{
	echo ("File Name : " . $file_name);
	echo "<br>";
	}
	$lokasi->close();
?>