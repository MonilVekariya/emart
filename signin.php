<?php
    session_start();
    $msg = "&nbsp;";
    include_once("dbconnect.php");

    if (isset($_POST['sub'])) 
    {
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];

        $sql = "select * from customer_tb where cu_username='$user_name' and cu_pass='$user_password'";
        $res = mysqli_query($con, $sql);

        $num = mysqli_num_rows($res);
        $row = mysqli_fetch_array($res);

        if ($num>0) 
        {
            $_SESSION["user_name"] = $user_name;
            $_SESSION["user_id"] = $row["cu_id"];
			$_SESSION["cu_mono"]=$row["cu_mono"];
			$_SESSION["cu_name"]=$row["cu_name"];
            header("location:index.php") ;
        } else 
        {
            $msg = "<font color='red'>Login Fail...</font>";
        }
        mysqli_close($con);
    }
    include_once("header.php");
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
                            <td>User ID</td>
                            <td><input type="text" class="form-control" name="user_name" required="true"></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="password" class="form-control" name="user_password" required="true"></td>
                        </tr>

                        
                        <tr>
                            <th colspan="2"><input type="submit" class="btn btn-primary" name="sub" value="Sign In"></th>
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