<?php
include 'connect_db.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query="delete from `customers` where id=$id";
    $data=mysqli_query($con,$query);
    if($data){
        header('location:show_customer.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>