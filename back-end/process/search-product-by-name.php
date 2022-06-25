<?php
include_once 'db.php';

$p_name = $_POST['name'];
$p_id = 0;

$sql = "SELECT p_id FROM products WHERE name LIKE '%$p_name%'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$p_id = $row['p_id'];

if($p_id != 0){
    header('Location: ../update-product.php?p_id='.$p_id.'');
}else{
    header('Location: ../select-for-update-product.php');
}
?>