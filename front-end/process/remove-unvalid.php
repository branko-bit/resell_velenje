<?php
include_once 'process/db.php';
$afterStock = 0;
$date = date('Y-m-d H:i:s');
$sql = "SELECT u.username, r.r_id, r.p_id FROM reservations r INNER JOIN users u ON u.u_id = r.u_id WHERE valid_until < '$date'";
$result = mysqli_query($link, $sql);
try{
    while($row = mysqli_fetch_array($result)){
        $p_id = $row['p_id'];
        $r_id = $row['r_id'];

        //DELETE RESERVATION
        $sql = "DELETE FROM reservations WHERE r_id = $r_id";
        $result = mysqli_query($link, $sql);

        //GET CURRENT STOCK
        $sql = "SELECT p_id, stock FROM products p WHERE p_id = $p_id";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);

        //STOCK++
        $stock = $row['stock'];
        echo $stock;
        $afterStock = $stock + 1;

        //UPDATE STOCK
        $sql = "UPDATE products SET stock = $afterStock WHERE p_id = $p_id";
        $result = mysqli_query($link, $sql);
    }
}catch(e){
}
?>