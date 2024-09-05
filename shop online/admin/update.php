<?php
include('config.php');
if (isset($_POST['update'])){
    $ID=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up="images/".$image_name;
    $update= "UPDATE products SET name='$name', price='$price', image='$image_up'WHERE id=$ID";
    mysqli_query($conn,$update);
    header("location: index.php");
}





?>