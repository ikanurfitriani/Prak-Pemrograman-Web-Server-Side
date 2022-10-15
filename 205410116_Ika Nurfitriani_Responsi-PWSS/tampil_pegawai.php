<?php
	require 'koneksi.php';
	$result = mysqli_query($koneksi, "SELECT * FROM
	pegawai");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
<title>Tampil Data Pegawai</title>
</head>
<body>
<a href="tambah_pegawai.php">+Tambah Data</a><br><br>
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Jenis Kelamin</td>
			<td>Jabatan</td>
			<td>Usia</td>
			<td>Aksi</td>
		</tr>
		<?php
			while ($data = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $data['Id']; ?></td>
			<td><?php echo $data['Nama']; ?></td>
			<td><?php echo $data['Email']; ?></td>
			<td><?php echo $data['Jenis_Kelamin']; ?></td>
			<td>
			<?php
				$queryJabatan = mysqli_query($koneksi, "SELECT * FROM jabatan
				WHERE Kode_Jabatan=".$data['Jabatan']);
				$dataJabatan = mysqli_fetch_assoc($queryJabatan);
				echo $dataJabatan['Nama_Jabatan'];
			?>
			</td>
			<td><?php echo $data['awUsia']; ?></td>
			<td>
			<a href="edit_pegawai.php?Id=<?php echo $data['Id']; ?>">
			Edit</a>
			<a href="hapus_pegawai.php?Id=<?php echo $data['Id']; ?>">
			Hapus</a>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>