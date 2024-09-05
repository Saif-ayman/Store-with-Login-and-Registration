<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Shop Online </title>
</head>
<body>
    <center>
      <div class="main">
            <form action="add.php" method="POST" enctype="multipart/form-data" >
            <h2>Welcome to Our Shop </h2>
            <img src="logo.png" alt="logo" width= "200px">
            <input type="text" name="name" >
            <br>
            <input type="number" name="price" >
            <br>
            <input type="file" id="file" name="image" style="display:none;">
            <label for="file">Choose Product Image</label>
            <button name ="upload"> Upload Product </button>
            <br><br>
            <a href="products.php">All Products</a>
        </form>
     </div>
     
    </center>
</body>
</html>