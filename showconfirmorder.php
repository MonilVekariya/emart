<?php

session_start();
if (!isset($_SESSION['user_id'])) 
{
    header("location:index.php");
}
include_once("header.php");

include_once("dbconnect.php");

$sql="SELECT order_tb.*,item_tb.i_name,item_tb.i_image FROM order_tb,item_tb WHERE order_tb.i_id=item_tb.i_id 
 and cu_id = ".$_SESSION['user_id']." and order_date!='0000-00-00'";

$res=mysqli_query($con,$sql);
?>

<div class="container">
    <div class="row">
        

        <div class="col-12">
        <br>
        <h1>My Orders...</h1>
        <table class="table table-striped">
            <tr>
                <td>Order Id</td>
                <td>Item Name</td>
                <td>Order Date</td>
                <td>Quantity</td>
                <td>Rate</td>
                <td>Total Rupees</td>
                <td>Image</td>
                

            </tr>
            <?php 
            while ($row=mysqli_fetch_array($res))
            {
                ?>
            <tr>
                <td><?php echo $row['o_id']; ?></td>
                <td><?php echo $row['i_name']; ?></td>
                <td><?php echo $row['order_date']; ?></td>
                <td><?php echo $row['i_quantity']; ?></td>
                <td><?php echo $row['i_rate']; ?></td>
                <td><?php echo $row['i_amount']; ?></td>
                <td><img src="admin/photos/<?php echo $row['i_image']; ?>" alt="" height="100px" width="100px"></td>
               
                
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