<?php
include_once 'db.php';
if(!isset($_COOKIE['u_id'])){
    header('Location: ../log-in.php');
}

$p_id = $_GET['p_id'];
$r_id = $_GET['r_id'];
$afterStock = 0;

$sql = "SELECT quantity FROM reservations WHERE r_id = $r_id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$userQuantity = $row['quantity'];

$sql = "DELETE FROM reservations WHERE r_id = $r_id";
$result = mysqli_query($link, $sql);

$sql = "SELECT p_id, stock FROM products WHERE p_id = $p_id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$stock = $row['stock'];
$afterStock = $stock + $userQuantity;
$sql = "UPDATE products SET stock = $afterStock WHERE p_id = $p_id";
$result = mysqli_query($link, $sql);
header('Location: ../cart.php');
?>