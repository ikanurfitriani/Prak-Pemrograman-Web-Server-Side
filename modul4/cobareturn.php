<?php
function laporan($bulan) {
	if ($bulan < 3) {
		$status = 'Report belum tersedia';
	} else {
		$status = 'Report sudah tersedia';
	}
	return $status;
}
echo laporan(2);
?>