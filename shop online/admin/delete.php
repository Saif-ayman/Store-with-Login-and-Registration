<?php
include('config.php');
$ID= $_GET['id'];
$del= "DELETE FROM products WHERE id=$ID";
mysqli_query($conn,$del);

header("Location: products.php"); 

?>