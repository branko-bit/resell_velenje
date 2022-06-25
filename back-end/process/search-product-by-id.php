<?php
include_once 'db.php';

$p_id = $_POST['id'];
$found = false;

$sql = "SELECT name FROM products WHERE p_id = $p_id";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)){
    $found = true;
}

if($found){
    header('Location: ../update-product.php?p_id='.$p_id.'');
}else{
    header('Location: ../select-for-update-product.php');
}
?>