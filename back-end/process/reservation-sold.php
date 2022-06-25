<?php
include_once 'db.php';
if(!isset($_COOKIE['u_id'])){
    header('Location: ../log-in.php');
}

$r_id = $_GET['r_id'];

$sql = "DELETE FROM reservations WHERE r_id = $r_id";
$result = mysqli_query($link, $sql);

header('Location: ../order-list.php');
?>