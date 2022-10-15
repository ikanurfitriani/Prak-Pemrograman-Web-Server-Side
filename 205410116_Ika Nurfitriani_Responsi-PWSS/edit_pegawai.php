<?php
	require 'koneksi.php';
	$Id = $_GET['Id'];
	$result = mysqli_query($koneksi, "SELECT * FROM pegawai
	WHERE Id='$Id'");
	$dataPegawai = mysqli_fetch_assoc($result);
	$refJabatan = mysqli_query($koneksi, "SELECT * FROM jabatan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
<title>Edit Data Pegawai</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Id</td>
				<td>:</td>
				<td>
				<input type="text" name="Id"
				value="<?php echo $dataPegawai['Id'] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
				<input type="text" name="Nama"
				value="<?php echo $dataPegawai['Nama'] ?>">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
				<input type="text" name="Email"
				value="<?php echo $dataPegawai['Email']?>">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
				<label><input type="radio" name="Jenis_Kelamin" value="Pria" <?php if($dataPegawai['Jenis_Kelamin']=='Pria') echo 'checked'?>>Pria</label>
				<label><input type="radio" name="Jenis_Kelamin" value="Wanita" <?php if($dataPegawai['Jenis_Kelamin']=='Wanita') echo 'checked'?>>Wanita</label>
				</td>
			</tr>
			<tr>
				<td>Usia</td>
				<td>:</td>
				<td>
				<input type="text" name="awUsia"
				value="<?php echo $dataPegawai['awUsia']?>">
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>
				<select name="Jabatan" id="">
				<?php
					while ($dataJabatan = mysqli_fetch_array($refJabatan)) {
				?>
				<option value="<?php echo $dataJabatan['Kode_Jabatan']; ?>"
				<?php if($dataPegawai['Jabatan'] == $dataJabatan['Kode_Jabatan'])
				{ echo "selected"; } ?>>
				<?php echo $dataJabatan['Nama_Jabatan']; ?></option>
				<?php
					}
				?>
				</select>
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
			$Nama = $_POST['Nama'];
			$Email = $_POST['Email'];
			$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
			$awUsia = $_POST['awUsia'];
			$Jabatan = $_POST['Jabatan'];
			$result = mysqli_query($koneksi, "UPDATE pegawai SET
			Nama='$Nama', Email ='$Email',
			Jenis_Kelamin='$Jenis_Kelamin', awUsia='$awUsia', Jabatan='$Jabatan' WHERE Id='$Id'");
			header('Location: tampil_pegawai.php');
		}
	?>
</body>
</html>