<?php

$id=$_GET['id'];
include_once("dbconnect.php");
$odt=date("Y/m/d");
$selsql="update order_tb set order_date = '$odt' where o_id=$id";
mysqli_query($con,$selsql);
header("location:showcart.php"); 

?>