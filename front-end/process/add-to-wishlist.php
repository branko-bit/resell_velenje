<?php
include_once 'db.php';
if(isset($_COOKIE['u_id'])){
    $p_id = $_GET['p_id'];
    $u_id = $_COOKIE['u_id'];
    $sql = "INSERT INTO wishlist (p_id, u_id) VALUES($p_id,$u_id)";
    $result = mysqli_query($link, $sql);
    header('Location: ../wishlist.php');
}else{
    header('Location: ../log-in.php');
}
?>