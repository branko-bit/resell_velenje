<?php
include_once 'db.php';
$p_id = $_POST['pid'];
$name = $_POST['name'];
$description = $_POST['description'];
$pic_link = $_POST['picture-link'];
$price = $_POST['price'];
$size = $_POST['size'];
$stock = $_POST['stock'];

$sql = "UPDATE products SET name = '$name', description = '$description', pic_link = '$pic_link', price = $price, size = '$size', stock = $stock WHERE p_id = $p_id";
$result = mysqli_query($link, $sql);

header('Location: ../products.php');
?>