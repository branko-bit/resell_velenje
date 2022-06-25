<?php
include_once 'db.php';
if(isset($_COOKIE['u_id'])){
    $isAvalible = false;
    $p_id = $_GET['p_id'];
    $u_id = $_COOKIE['u_id'];
    $sql = "SELECT p_id, stock FROM products WHERE p_id = $p_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    $wantQuantity = $_GET['quantity'];
    $stock = $row['stock'];
    if($stock >= $wantQuantity){
        $isAvalible = true;
    }else{
        $isAvalible = false;
        header('Location: ../shop-no-sidebar.php');
    }
    if($isAvalible){
        //GENERATE RANDOM CODE
        $code = random_int(100000, 999999);

        $date = date('Y-m-d H:i:s');
        $valid = date('Y-m-d H:i:s', strtotime($date. ' + 2 days'));
        $sql = "INSERT INTO reservations (valid_until, u_id, p_id, quantity, code) VALUES('$valid',$u_id,$p_id, $wantQuantity, $code)";
        $result = mysqli_query($link, $sql);
        $afterStock = $stock - $wantQuantity;
        $sql = "UPDATE products SET stock = $afterStock WHERE p_id = $p_id";
        $result = mysqli_query($link, $sql);
        header('Location: ../cart.php');
    }
}else{
    header('Location: ../log-in.php');
}
?>