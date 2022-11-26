<?php
include 'connect_db.php';

if(isset($_POST['submit']) and isset($_GET['id']))
{
    $name=$_POST['name'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $id=$_GET['id'];

    $query= "insert into `products` (customer_id,name,price,description) values('$id','$name','$price','$description')";
    $data=mysqli_query($con,$query);
    if($data){
        header('location:show_products.php? id='.$id.'');
    }
    else{
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

        <title>Product</title>
    </head>
    <body>
        <div class="container my-5">
            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Price" name="price" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Description" name="description" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>