<?php
include_once 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$is_avalible = true;

if(isset($username) && isset($email) && isset($password) && isset($confirm_password)){
    if($password == $confirm_password){
        //check for email existence
        $sql = "SELECT email FROM `users`";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)){
            if($row['email'] == $email){
                $is_avalible = false;
            }
        }

        //check for username existence
        $sql = "SELECT username FROM `users`";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)){
            if($row['username'] == $username){
                $is_avalible = false;
            }
        }

        if($password == $confirm_password && $is_avalible == true){
            $password = hash('sha256', $password);
            try{
            $username = mysqli_real_escape_string($link, $username);
            $email = mysqli_real_escape_string($link, $email);
            $password = mysqli_real_escape_string($link, $password);
            $sql = "INSERT INTO `users` (username, email, password, ro_id) VALUES('$username', '$email', '$password', 1)";
            $result = mysqli_query($link, $sql);
            }catch(Exception $e){
                echo $e;
            }
        }
        if($is_avalible == false){
            header('Location: ../sign-up.php');
        }else{
            header('Location: ../../front-end/log-in.php');
        }
    }else{
        header('Location: ../../front-end/log-in.php'); 
    }
}else{
    header('Location: sign-up.php');
}

?>