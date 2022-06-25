<?php
include_once 'db.php';
if(isset($_COOKIE['u_id'])){
    $u_id = $_COOKIE['u_id'];
    $sql = "SELECT ro_id FROM users WHERE u_id = $u_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    if($row['ro_id'] == 3){
        //LETS
    }else{
        header('Location: sign-up.php');
    }
}else{
    header('Location: login.php');
}

?>