<?php
include('teskon.php');
$db = new database();
$data = $db->tampilkan_data();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <a href="tambah_data.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No. Hp</th>
            <th>Prodi</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach($data as $row) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['hp']; ?></td>
            <td><?php echo $row['prodi']; ?></td>
            <td>
			<a href="edit.php?x=<?php echo $row['nim'];?>">Update</a>
            <a href="proses_input.php?action=delete&x=<?php echo $row['nim'];?>">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html> 