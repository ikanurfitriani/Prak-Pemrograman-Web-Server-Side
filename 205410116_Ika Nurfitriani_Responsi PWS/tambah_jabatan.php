<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, 
	initial-scale=1.0">
<title>Tambah Data Jabatan</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Kode Jabatan</td>
				<td>:</td>
				<td>
				<input type="text" name="Kode_Jabatan">
				</td>
			</tr>
			<tr>
				<td>Nama Jabatan</td>
				<td>:</td>
				<td>
				<input type="text" name="Nama_Jabatan">
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
				<input type="submit" value="SIMPAN" name="submit">
				</td>
			</tr>
		</table>
	</form>
<?php
	require 'koneksi.php';
	if (isset($_POST['submit'])) {
		$Kode_Jabatan = $_POST['Kode_Jabatan'];
		$Nama_Jabatan = $_POST['Nama_Jabatan'];
		$result = mysqli_query($koneksi, "INSERT INTO jabatan(Kode_Jabatan, Nama_Jabatan)
		VALUES('$Kode_Jabatan', '$Nama_Jabatan')");
		header('Location: tampil_jabatan.php');
	}
?>
</body>
</html>