<?php
$con= new mysqli("localhost","root","","products_crm");
if(!$con){
    die(mysqli_error($con));
}
?>