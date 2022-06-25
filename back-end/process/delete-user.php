<?php
include_once 'db.php';
if(!isset($_COOKIE['u_id'])){
    header('Location: ../log-in.php');
}

$u_id = $_GET['u_id'];

$sql = "DELETE FROM reservations WHERE u_id = $u_id";
$result = mysqli_query($link, $sql);

$sql = "DELETE FROM wishlist WHERE u_id = $u_id";
$result = mysqli_query($link, $sql);

$sql = "DELETE FROM users WHERE u_id = $u_id";
$result = mysqli_query($link, $sql);

header('Location: ../all-users.php');
?>