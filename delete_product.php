<?php
include 'connect_db.php';
if(isset($_GET['id']) and isset($_GET['customer_id'])){
    $id=$_GET['id'];
    $customer_id=$_GET['customer_id'];

    $query="delete from `products` where id=$id";
    $data=mysqli_query($con,$query);
    if($data){
        header('location:show_products.php? id='.$customer_id.'');
    }
    else{
        die(mysqli_error($con));
    }
}
?>