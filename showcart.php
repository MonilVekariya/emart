<?php

session_start();
include_once("header.php");

include_once("dbconnect.php");
$sql="SELECT order_tb.*,item_tb.i_name,item_tb.i_image FROM order_tb,item_tb WHERE order_tb.i_id=item_tb.i_id 
and cu_id = ".$_SESSION['user_id']." and order_date='0000-00-00'";
$res=mysqli_query($con,$sql);
?>

<div class="container">
    <div class="row">
        

        <div class="col-12">
        <br>
        <table class="table table-striped">
            <tr>
                <td>Order Id</td>
                <td>Item Name</td>
                <td>Cart Date</td>
                <td>Quantity</td>
                <td>Rate</td>
                <td>Total Rupees</td>
                <td>Image</td>
                <td>Cancle</td>
                <td>Confirm</td>

            </tr>
            <?php 
            while ($row=mysqli_fetch_array($res))
            {
                ?>
            <tr>
                <td><?php echo $row['o_id']; ?></td>
                <td><?php echo $row['i_name']; ?></td>
                <td><?php echo $row['cart_date']; ?></td>
                <td><?php echo $row['i_quantity']; ?></td>
                <td><?php echo $row['i_rate']; ?></td>
                <td><?php echo $row['i_amount']; ?></td>
                <td><img src="admin/photos/<?php echo $row['i_image']; ?>" alt="" height="100px" width="100px"></td>
                <td><a href="deletefromcart.php?id=<?php echo $row[0]; ?>" 
                onclick="return confirm('Are you sure to Cancle Order ..?')">Cancle</a></td>
                <td><a href="confirmorder.php?id=<?php echo $row[0]; ?>" 
                onclick="return confirm('Are you sure to Confirm Order..?')">Confirm</a></td>
                
            </tr>
            
            <?php } ?>
        </table>
        <br>
        </div>

        

    </div>

</div>


<?php

include_once("footer.php");

?>