<?php
$servername = "localhost";
$username = "resell_admin";
$password = "PuBg&MISONI3";
$database = "resell_velenje";

// Create connection
$link = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "";
}
?>