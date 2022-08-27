<?php
	require 'koneksi.php';
	$Kode_Jabatan = $_GET['Kode_Jabatan'];
	$result = mysqli_query($koneksi, "SELECT * FROM jabatan WHERE
	Kode_Jabatan='$Kode_Jabatan'");
	$dataJabatan = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
<title>Edit Data Jabatan</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Kode Jabatan</td>
				<td>:</td>
				<td>
				<input type="text" name="Kode_Jabatan"
				value="<?php echo $dataJabatan['Kode_Jabatan'] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Nama Jabatan</td>
				<td>:</td>
				<td>
				<input type="text" name="Nama_Jabatan" 
				value="<?php echo $dataJabatan['Nama_Jabatan'] ?>">
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
		$result = mysqli_query($koneksi, "UPDATE jabatan SET
		Kode_Jabatan='$Kode_Jabatan',
		Nama_Jabatan='$Nama_Jabatan'
		WHERE Kode_Jabatan='$Kode_Jabatan'");
		header('Location: tampil_jabatan.php');
	}
?>
</body>
</html>