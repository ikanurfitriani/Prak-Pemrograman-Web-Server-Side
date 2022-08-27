<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php
session_start();
require 'connect.php';
require 'detail.php';
if(isset($_GET['id']) && !isset($_POST['update'])) {
    $sql = "SELECT * FROM barang WHERE id=".$_GET['id'];
    $hasil = mysqli_query($con, $sql);
    $barang = mysqli_fetch_object($hasil);
    $item = new Item();
    $item->id = $barang->id;
    $item->nama = $barang->nama;
    $item->harga = $barang->harga;
    $jumlah = $barang->jumlah;
    $item->jumlah = 1;
    $index = -1;
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart);$i++)
    if ($cart[$i]->id == $_GET['id']){
        $index = $i;
        break;
    }
    if($index == -1)
    $_SESSION['cart'][] = $item;
    else {
        if (($cart[$index]->jumlah) < $iteminstock)
        $cart[$index]->jumlah ++;
        $_SESSION['cart'] = $cart;
    }
}
if(isset($_GET['index']) && !isset($_POST['update'])) {
    $cart = unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}
if(isset($_POST['update'])) {
    $arrQuantity = $_POST['jumlah'];
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart);$i++) {
        $cart[$i]->jumlah = $arrQuantity[$i];
    }
    $_SESSION['cart'] = $cart;
}
?>
<h2 align ="center"> Detail Belanja Anda: </h2>
<form method="POST">
    <table class="center" id="t01">
        <tr>
            <th>Option</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
        <?php
        $cart = unserialize(serialize($_SESSION['cart']));
        $s = 0;
        $index = 0;
        for($i=0; $i<count($cart); $i++){
            $s += $cart[$i]->harga * $cart[$i]->jumlah;
        ?>
        <tr>
            <td><a href="cart.php?index=<?php echo $index; ?>"
            onclick="return confirm('Yakin Ingin Menghapus?')"
            >Delete</a> </td>
            <td> <?php echo $cart[$i]->id; ?> </td>
            <td> <?php echo $cart[$i]->nama; ?> </td>
            <td>Rp. <?php echo $cart[$i]->harga; ?> </td>
            <td> <input type="number" min="1" value="<?php echo
            $cart[$i]->jumlah; ?>" name="jumlah[]"> </td>
            <td> Rp.<?php echo $cart[$i]->harga * $cart[$i]->jumlah; ?> </td>
        </tr>
        <?php
        $index++;
        } ?>
        <tr>
            <td colspan="5" style="text-align:right; fontweight:bold">Total
            <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button">
            <input type="hidden" name="update">
            </td>
            <td> Rp.<?php echo $s; ?> </td>
        </tr>
    </table>
</form>
<br>
<a href="barang.php">Lanjutkan Belanja</a> | <a href="checkout.php">Selesai</a>
<?php
if(isset($_GET["id"]) || isset($_GET["index"])){
    header('Location: cart.php');
}
?>
</body>
</html>