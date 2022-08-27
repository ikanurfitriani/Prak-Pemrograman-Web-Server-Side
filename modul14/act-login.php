<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$mysqli = new mysqli("localhost", "root", "", "belanja");
$sql = $mysqli->query("SELECT * FROM login WHERE username='$username' AND password='$password'");
$qry = $sql->fetch_assoc();
$username = $qry['username'];
$password = $qry['password'];
$level = $qry['level'];
if($username==$username && $password==$password) {
    if($level=='admin') {
        header('location:form_input.php');
    }
    else if($level=="user") {
        header('location:barang.php');
    }
    else {
        ?>
        <script language="JavaScript">alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
        document.location='login-multiuser-php-mysql.php';
        </script>
        <?php
    }
}