<?php
	require 'koneksi.php';
	$result = mysqli_query($koneksi, "SELECT * FROM jabatan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
<title>Tampil Data Jabatan</title>
</head>
<body>
<a href="tambah_jabatan.php">Tambah Data Jabatan</a>
	<table border="1">
		<tr>
			<td>Kode Jabatan</td>
			<td>Nama Jabatan</td>
			<td>Aksi</td>
		</tr>
<?php
	while ($data = mysqli_fetch_array($result)) {
?>
		<tr>
			<td><?php echo $data['Kode_Jabatan']; ?></td>
			<td><?php echo $data['Nama_Jabatan']; ?></td>
			<td>
			<a href="edit_jabatan.php?Kode_Jabatan=<?php 
			echo $data['Kode_Jabatan']; ?>">Edit</a>
			<a href="hapus_jabatan.php?Kode_Jabatan=<?php echo
			$data['Kode_Jabatan']; ?>">Hapus</a>
			</td>
		</tr>
<?php
	}
?>
	</table>
</body>
</html>