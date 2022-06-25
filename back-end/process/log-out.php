<?php
setcookie('u_id', '', time() - 3600, '/');
header('Location: ../login.php');
?>