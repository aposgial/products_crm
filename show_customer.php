<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Customers</title>
</head>
<body>
    <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                <th scope="col">Customer id</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Date</th>
                <th scope="col">Buttons</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connect_db.php';
                    $query="Select * from `customers`";
                    $data=mysqli_query($con,$query);
                    if($data){
                        while($res=mysqli_fetch_assoc($data)){
                            echo'<tr>
                                <th scope="row">'.$res['id'].'</th>
                                <td>'.$res['firstname'].'</td>
                                <td>'.$res['lastname'].'</td>
                                <td>'.$res['email'].'</td>
                                <td>'.$res['phone'].'</td>
                                <td>'.$res['date'].'</td>
                                <td>
                                    <button class="btn btn-primary"><a href="add_product.php? id='.$res['id'].'" class="text-light">Add product</a></button>
                                    <button class="btn btn-danger"><a href="delete_customer.php? id='.$res['id'].'" class="text-light">Delete</a></button>
                                </td>
                            </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
        <center><button class="btn btn-primary my-5"><a href="add_customer.php" class="text-light">Add customer</a></button></center>
    </div>
    
</body>
</html>