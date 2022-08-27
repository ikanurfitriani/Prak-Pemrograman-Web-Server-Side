<?php
session_start();
echo "<script>window.location.assign('logout.php')</script>";
session_destroy();
?>