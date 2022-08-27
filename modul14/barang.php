<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require 'connect.php';
$sql = 'SELECT * FROM barang';
$result = mysqli_query($con, $sql);
?>
<h2 align="center"> Pilihan Barang: </h2>
    <table class="center" id="t01">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah (stock)</th>
            <th>Aksi</th>
        </tr>
        <?php while($barang = mysqli_fetch_object($result)) {
        ?>
        <tr>
            <td> <?php echo $barang->id; ?> </td>
            <td> <?php echo $barang->nama; ?> </td>
            <td> Rp.<?php echo $barang->harga; ?> </td>
            <td> <?php echo $barang->jumlah; ?> </td>
            <td> <a href="cart.php?id= <?php echo $barang->id; ?>
            &action=add">Beli</a> </td>
        </tr>
        <?php } ?>
    </table>
    <a href="logout.php">Keluar</a>
</body>
</html>