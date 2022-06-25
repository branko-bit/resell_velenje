<?php
include_once 'db.php';
$sql = "SELECT category FROM categories";
$result = mysqli_query($link, $sql);
echo '<select id="cars">';
while($row = mysqli_fetch_array($result)){
    $cat = $row['category'];
    echo '<option value="'.$cat.'">'.$cat.'</option>';
}
echo '</select>';
?>