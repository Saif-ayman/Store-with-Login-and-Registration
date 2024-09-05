<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Products</title>
    <style>
      h3{
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight:bold; 
    }
    .card{
        float:left;
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 20%;
        height: auto;
        text-align: center;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }
    .card img{
        max-width: 100%;
        height: 200px;
        padding: 5px;
    }
    main{
        width: 60%;
    }
 



    </style>
</head>
<body>
    <center>
        <h3>All of Products | Admin </h3>
    </center>
    <?php
    include('config.php');


    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result)) {
        echo"
        <center>
         <main>
         <div class='card' style='width: 15rem;'>
            <img src='$row[image]' class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>$row[name]</h5>
                <p class='card-text'>$row[price]</p>
                <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete Product</a>
                <a href='edit.php? id=$row[id]' class='btn btn-primary'>Edit Product</a>
            </div>
         </div>
         </main>
        <center>
        ";

    }


    ?>





</body>
</html>