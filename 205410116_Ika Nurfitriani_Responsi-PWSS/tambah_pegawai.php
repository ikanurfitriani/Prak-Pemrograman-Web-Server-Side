<?php
	require 'koneksi.php';
	$refJabatan = mysqli_query($koneksi, "SELECT * FROM jabatan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
<title>Tambah Data Pegawai</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
				<input type="text" name="Nama">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
				<input type="text" name="Email">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
				<input type="radio" name="Jenis_Kelamin" value="Pria">Pria
				<input type="radio" name="Jenis_Kelamin" value="Wanita">Wanita<br>
				</td>
			</tr>
			<tr>
				<td>Usia</td>
				<td>:</td>
				<td>
				<input type="text" name="awUsia">
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td>
				<select name="Jabatan" id="">
					<?php
					while ($dataJabatan =
					mysqli_fetch_array($refJabatan)) {
					?>
				<option value="<?php echo
				$dataJabatan['Kode_Jabatan']; ?>">
					<?php echo $dataJabatan['Nama_Jabatan']; ?></option>
					<?php
					}
					?>
				</select>
				</td>
			</tr>
			<tr>
				<td></td><td></td>
				<td>
				<input type="submit" value="SIMPAN"
				name="submit">
				</td>
			</tr>
		</table>
	</form>
	<?php
		require 'koneksi.php';
		if (isset($_POST['submit'])) {
			if(filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL) == false){
				?>
				<script language="JavaScript"> 
				alert("Email tidak valid! <br>Harus terdapat @ dan . ");
				window.location.href="tambah_pegawai.php?error=Email+tidak+valid";
				</script>
				<?php
			} else {
			$Nama = $_POST['Nama'];
			$Email= $_POST['Email'];
			$Jenis_Kelamin=$_POST['Jenis_Kelamin'];
			$awUsia = $_POST['awUsia'];
			$Jabatan=$_POST['Jabatan'];
			$result = mysqli_query($koneksi, "INSERT INTO
			pegawai(Nama, Email, Jenis_Kelamin, awUsia, Jabatan)
			VALUES('$Nama', '$Email', '$Jenis_Kelamin', '$awUsia',
			'$Jabatan')");
			header('Location: tampil_pegawai.php');
			}
		}
	?>
</body>
</html>