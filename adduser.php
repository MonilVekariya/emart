<?php
include_once("header.php");
//INSERT INTO `online_electronics_db`.`customer_tb` (`cu_id`, `cu_name`, `cu_username`, `cu_pass`, `cu_emailid`,
// `cu_mono`, `cu_adress`, `cu_city`) 
?>

<?php

$msg = "&nbsp;";

$host = "localhost";
$user = "root";
$database = "emart";
$pass = "";

$con = mysqli_connect($host, $user, $pass, $database);

if (isset($_POST['sub'])) {
    $id = $_POST['cu_id'];
    $nm = $_POST['cu_name'];
    $usnm = $_POST['cu_username'];
    $pass = $_POST['cu_pass'];
    $email = $_POST['cu_emailid'];
    $mo = $_POST['cu_mono'];
    $adr = $_POST['cu_adress'];
    $ct = $_POST['cu_city'];


    $inssql = "INSERT INTO `customer_tb`(`cu_id`, `cu_name`, `cu_username`, `cu_pass`, `cu_emailid`, `cu_mono`, `cu_adress`, `cu_city`) VALUES
    ($id,'$nm','$usnm','$pass','$email','$mo','$adr','$ct');";

    $res = mysqli_query($con, $inssql);

    if ($res) 
    {
        $msg = "<font color='green'>Record Added Successfully...</font>";
    } else 
    {
        $msg = "<font color='red'>Record Not Added...</font>";
    }
    
    }

    
        $sql="select max(cu_id) from customer_tb";
        $rs=mysqli_query($con,$sql);
    
        $row=mysqli_fetch_array($rs);
        $id=$row[0]+1;
    
        mysqli_close($con);    

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
                            <th colspan="2">Sign Up New Customer</th>
                        </tr>
                        <tr>
                            <td>Customer ID</td>
                            <td><input type="text" class="form-control" name="cu_id" value="<?php echo $id; ?>" readonly="true"></td>
                        </tr>

                        <tr>
                            <td>Customer Name</td>
                            <td><input type="text" class="form-control" name="cu_name" required="true"></td>
                        </tr>

                        <tr>
                            <td>Customer UserName</td>
                            <td><input type="text" class="form-control" name="cu_username" required="true"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" class="form-control" name="cu_pass" required="true"></td>
                        </tr>
                        <tr>
                            <td>E-mail ID</td>
                            <td><input type="email" class="form-control" name="cu_emailid" required="true"></td>
                        </tr>
                        <tr>
                            <td>Mobile No.</td>
                            <td><input type="text" class="form-control" name="cu_mono" required="true"></td>
                        </tr>
                        <tr>
                            <td>Adress</td>
                            <td><input type="text" class="form-control" name="cu_adress" required="true"></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input type="text" class="form-control" name="cu_city" required="true"></td>
                        </tr>

                        <tr>
                            <th colspan="2"><input type="submit" class="btn btn-primary" name="sub"></th>
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