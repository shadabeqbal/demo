<?php
include "database.php";
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM `users` WHERE sno = $id");
sleep(1);
header("location: index.php");
?>