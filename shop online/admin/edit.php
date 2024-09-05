<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title> Update  </title>
    <style>
        #save{
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 40%;
            opacity: 0.9;
        }
        #file{
            margin-top: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            display: inline-block;
            background-color: #f1f1f1;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $edit=mysqli_query($conn,"SELECT * FROM products WHERE id=$ID");
    $data= mysqli_fetch_array($edit);


    ?>
    <center>
      <div class="main">
            <form action="update.php" method="POST" enctype="multipart/form-data" >
            <h2>Edit Products </h2>
            <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
            <input type="text" name="name" value='<?php echo $data['name'] ?>' >
            <br>
            <input type="number" name="price" value='<?php echo $data['price'] ?>' >
            <br>
            <input type="file" id="file" name="image" style="display:none;">
            <label for="file" id="file">Update Product Image</label>
            <button name ="update" type='submit' id="save"> Save </button>
            <br><br>
            <a href="products.php">All Products</a>
        </form>
     </div>
     
    </center>
</body>
</html>