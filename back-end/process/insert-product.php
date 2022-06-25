<?php 
include_once 'db.php';

$name = $_POST['name'];
$description = $_POST['description'];
$category_id = $_POST['category'];
$pic_link = $_POST['picture-link'];
$price = $_POST['price'];
$size = $_POST['size'];
$stock = $_POST['stock'];

$sql = "SELECT c_id FROM categories WHERE category = '$category_id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$category_id = $row['c_id'];

//inserts data if everything is ok
if(true){
    try{
    $sql = "INSERT INTO `products` (name, description, pic_link, price, size, stock, products.c_id) VALUES('$name', '$description', '$pic_link', '$price', '$size', '$stock', '$category_id');";
    $result = mysqli_query($link, $sql);
    }catch(Exception $e){
        echo $e;
    }
}

header('Location: ../add-new-product.php');
?>