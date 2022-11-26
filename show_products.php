<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Product</title>
</head>
<body>
    <div class="container">
        <?php
            include 'connect_db.php';
            if(isset($_GET['id'])){
                $customer_id=$_GET['id'];
                echo'<table class="table table-success table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Product_id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Buttons</th>
                        </tr>
                    </thead>
                    <tbody>';
                    
                    $query="Select * from `products` where customer_id='$customer_id'";
                    $data=mysqli_query($con,$query);
                    if($data)
                    {
                        while($res=mysqli_fetch_assoc($data))
                        {
                            echo'<tr>
                                <th scope="row">'.$res['id'].'</th>
                                <td>'.$res['name'].'</td>
                                <td>'.$res['price'].'</td>
                                <td>'.$res['description'].'</td>
                                <td><button class="btn btn-danger"><a href="delete_product.php? id='.$res['id'].'&customer_id='.$customer_id.'" class="text-light">Delete"</a></button></td>
                            </tr>';
                        }
                    }
                }   
            echo'</tbody>
        </table>
        <center>
            <button class="btn btn-primary my-5"><a href="add_product.php? id='.$customer_id.'" class="text-light">Add product</a></button>
        </center>';
        ?>
    </div>
    
</body>
</html>