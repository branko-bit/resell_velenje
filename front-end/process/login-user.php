<?php
include_once 'db.php';

$username = $_GET['username'];
$password = $_GET['password'];
$u_id = 0;

$sql = "SELECT username FROM `users`";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result)){
    if($row['username'] == $username){
        $username = mysqli_real_escape_string($link, $username);
        $sql = "SELECT password, u_id FROM `users` WHERE username = '$username'";
        $result = mysqli_query($link, $sql);
        $hashed = hash('sha256', $password);
        while ($row = mysqli_fetch_array($result)){
            if($row['password'] == $hashed){
                $u_id = $row['u_id'];
                $date_time = date('Y-m-d H:i:s');
                $sql = "UPDATE users SET last_seen = '$date_time' WHERE u_id = $u_id";
                $result = mysqli_query($link, $sql);
                setcookie("u_id", $row['u_id'], time() + 2 * 24 * 60 * 60, '/');
                echo 'cookie set';
                echo $_COOKIE['u_id'];
                header('Location: ../index.php');
            }else{
                header('Location: ../log-in.php');
            }
        }
    }
}
?>