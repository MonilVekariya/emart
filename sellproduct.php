<?php

session_start();
include_once("header.php");

include_once("dbconnect.php");

?>

<?php
$msg="&nbsp;";

if(isset($_POST['submit']))
{
	$imei =$_POST['imei'];
	$pname =$_POST['pname'];
	$cuname =$_POST['cname'];
	$price =$_POST['price'];
	$cuname =$_POST['cuname'];
	$mnum =$_POST['mnum'];
	$acc =$_POST['acc'];
	$add=$_POST['add'];
	//$quan =$_POST['file'];
	$s1=$_FILES['img']['name'];
	$t="admin/old_photos/".$s1;

	$sql = "INSERT INTO sell_old (imei,pname,company,price,customername,address,mobilenumber,accountnumber,photo) VALUES
	('$imei','$pname','$cuname',$price,'$cuname','$add','$mnum','$acc','$s1')";

	$res=mysqli_query($con,$sql);

    $s=$_FILES['img']['tmp_name'];
			
	move_uploaded_file($s,$t);
    if ($res) 
    {
        $msg = "<font color='red'>Record Added Successfully...</font>";
    } 
    else 
    {
        $msg = "<font color='red'>Record Not Added...</font>";
    }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br>
            <form method="post" enctype="multipart/form-data" action="">
                <center>
                    <table border="1">
                        <tr>
                            <th colspan="2">Add Product</th>
                        </tr>
						<tr>
							<td>Product Serial number</td>
							<td><input type="text" class="form-control" name="imei" required=""></td>
						</tr>
							
						<tr>
							<td>Product Name</td>
							<td><input type="text" class="form-control" name="pname" required=""></td>
						</tr>
							
							
						<tr>
							<td>Company</td>
							<td><input type="text" class="form-control" name="cname" required=""></td>							
						</tr>
							
						<tr>
							<td>Price</td>
							<td><input type="text" class="form-control" name="price" required=""></td>							
						</tr>
							
						<tr>
							<td>Customer Name</td>
							<td><input type="text" name="cuname" required="" class="form-control">	</td>		
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="add" required="" class="form-control">	</td>		
						</tr>
							
						<tr>
							<td>Mobile Number</td>
							<td><input type="text" name="mnum" required="" class="form-control"></td>
							
						</tr>
							
						<tr>
							<td>Account Number</td>
							<td><input type="text" name="acc" class="form-control" required="">	</td>						
						</tr>
							
						<tr>
							<td>Product Image</td>
							<td><input type="file" name="img" class="form-control" required=""></td>	
						</tr>
						<tr>
							<th colspan="2"><input type="submit"  class="btn btn-primary" name="submit" class="form-control" value="Submit">
						</tr>
						<tr>
                            <th colspan="2"><?php echo $msg; ?></th>
                        </tr>
					</table>
                </center>
            </form>
            <br>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<?php

include_once("footer.php");
?>
