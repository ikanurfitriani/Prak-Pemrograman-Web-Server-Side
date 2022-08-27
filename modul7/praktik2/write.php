<?php
	$file_baru = fopen("filesaya.txt","w");
	echo fwrite($file_baru, "stmik akakom yogyakarta jl raya janti 143 yogyakarta");
	fclose($file_baru);
?>