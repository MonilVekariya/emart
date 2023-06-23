<?php
    session_start();
    include_once("dbconnect.php");
    $sql="SELECT max(o_id) FROM  order_tb";
    $rs=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($rs);

    $o_id = $row[0]+1;
    $cart_date = date("Y/m/d");
    $cu_id=$_SESSION["user_id"];
    $i_id=$_POST["pid"];
    $i_quantity=$_POST["qty"];
    $i_rate=$_POST["pdisprice"];
    $i_amount = $i_quantity *$i_rate;
    $sql = "INSERT INTO order_tb (o_id, cart_date, cu_id, i_id, i_quantity, i_rate,i_amount) values ('$o_id', '$cart_date', '$cu_id', '$i_id', '$i_quantity','$i_rate','$i_amount')";
//    echo $sql;
    mysqli_query($con,$sql);    
    echo "<script>alert('Order Placed in cart to Successfully..');</script>";
    header("Refresh:1;url=product.php");
?>
