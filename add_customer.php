<?php
include 'connect_db.php';
if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];

    $query = "insert into `customers` (firstname,lastname,email,phone,date) values('$firstname','$lastname','$email','$phone','$date')";
    $data = mysqli_query($con,$query);

    if($data){
        header('location:show_customer.php');
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
        <title>Customers</title>
    </head>
    <body>
        <div class="container my-5">
            <form method="post">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" placeholder="Firstname" name="firstname" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" placeholder="Lastname" name="lastname" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" placeholder="Phone" name="phone" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control" placeholder="Date" name="date" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>