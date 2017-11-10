<?php
$q = $_POST["album"];
session_start();
$_SESSION['shop_type']=$q;
echo 'food.php';
?>