<?php

include_once("header.php");
//INSERT INTO `admin_tb`(`ad_id`, `ad_name`, `ad_username`, `ad_pass`) VALUES ([value-1],[value-2],[value-3],[value-4])
?>

<?php

$msg = "&nbsp;";

$host = "localhost";
$user = "root";
$database = "online_electronics_db";
$pass = "";

$con = mysqli_connect($host, $user, $pass, $database);

if (isset($_POST['sub'])) {
    $id = $_POST['ad_id'];
    $nm = $_POST['ad_name'];
    $aunm = $_POST['ad_username'];
    $pass = $_POST['ad_pass'];

    $inssql="INSERT INTO `admin_tb`(`ad_id`, `ad_name`, `ad_username`, `ad_pass`) VALUES 
    ($id,'$nm','$aunm','$pass');";

$res = mysqli_query($con, $inssql);

if ($res) 
{
    $msg = "<font color='green'>Record Added Successfully...</font>";
} else 
{
    $msg = "<font color='red'>Record Not Added...</font>";
}

}


    $sql="select max(ad_id) from admin_tb";
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
                            <th colspan="2">Sign In</th>
                        </tr>
                        <tr>
                            <td>Admin ID</td>
                            <td><input type="text" class="form-control" name="ad_id" value="<?php echo $id; ?>" readonly="true"></td>
                        </tr>

                        <tr>
                            <td>Admin Name</td>
                            <td><input type="text" class="form-control" name="ad_name" required="true"></td>
                        </tr>

                        <tr>
                            <td>Admin UserName</td>
                            <td><input type="text" class="form-control" name="ad_username" required="true"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" class="form-control" name="ad_pass" required="true"></td>
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