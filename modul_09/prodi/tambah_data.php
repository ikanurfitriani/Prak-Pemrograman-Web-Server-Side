<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, 
	initial-scale=1.0">
<title>Tambah Data</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Kode Prodi</td>
				<td>:</td>
				<td>
				<input type="text" name="kode_prodi">
				</td>
			</tr>
			<tr>
				<td>Nama Prodi</td>
				<td>:</td>
				<td>
				<input type="text" name="nama_prodi">
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
				<input type="submit" value="Simpan" name="submit">
				</td>
			</tr>
		</table>
	</form>
<?php
	require '../koneksi.php';
	if (isset($_POST['submit'])) {
		$kode_prodi = $_POST['kode_prodi'];
		$nama_prodi = $_POST['nama_prodi'];
		$result = mysqli_query($koneksi, "INSERT INTO prodi(kode_prodi, nama_prodi)
		VALUES('$kode_prodi', '$nama_prodi')");
		header('Location: tampil_data.php');
	}
?>
</body>
</html>