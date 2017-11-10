<?php
$q = $_POST["album"];
session_start();
$_SESSION['shop_name']=$q;
echo 'shop.php';
?>