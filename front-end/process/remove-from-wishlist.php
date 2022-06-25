<?php
include_once 'db.php';
if(!isset($_COOKIE['u_id'])){
    header('Location: ../log-in.php');
}

$w_id = $_GET['w_id'];


$sql = "DELETE FROM wishlist WHERE w_id = $w_id";
$result = mysqli_query($link, $sql);
header('Location: ../wishlist.php');
?>