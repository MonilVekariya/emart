<?php 
if(isset($_SESSION["user_name"]))
{
  $showcart="showcart.php";
  $signstatus='<a href="signin.php" class="cart-link"><i class="fa fa-unlock" aria-hidden="true"></i><span>'.$signstatus=$_SESSION["user_name"].'</span></a>';
  $signup='<a href="logout.php" class="account-link">
  <i class="fa fa-user" aria-hidden="true"></i>
  <span>
    Logout
  </span>
</a>';

//for notification in cart
include_once("dbconnect.php");
$sql="select count(o_id) from order_tb where cu_id = ".$_SESSION["user_id"]." and order_date='0000-00-00'";
$rs=mysqli_query($con,$sql);
$rowcart=mysqli_fetch_array($rs);
$incart="Cart (".$rowcart[0].")";

}
else
{
  $showcart="";
  $incart="Cart";
  $signstatus='<a href="signin.php" class="cart-link"><i class="fa fa-lock" aria-hidden="true"></i><span>Sign In</span></a>';
  $signup='<a href="adduser.php" class="account-link">
  <i class="fa fa-user" aria-hidden="true"></i>
  <span>
    Sign Up
  </span>
</a>';

}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>E-MART Pvt.Ltd.</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
<style>
  th ,td{
      padding: 5px;
  }
  
  th {
      text-align: center;
      background-color: #434f78;
      color: #ffffff;
  }
  

</style>
</head>

<?php $pgnm= basename($_SERVER["SCRIPT_FILENAME"],'.php'); ?>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +91 76002 80806
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : emartltd@gmail.com
                </span>
              </a>
            </div>
            
            <div class="user_option_box">
              
            
          <?php echo $signstatus;  ?>

         


              <?php

              echo $signup;
?>

              <a href="<?php echo $showcart; ?>" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  <?php echo $incart; ?>
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <span>
               E-MART Private Limited
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item   <?php if($pgnm=="index") echo "active";?>" >
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item   <?php if($pgnm=="about") echo "active";?>">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item   <?php if($pgnm=="product") echo "active";?>" >
                  <a class="nav-link" href="product.php">Products</a>
                </li>
                <li class="nav-item   <?php if($pgnm=="why") echo "active";?>">
                  <a class="nav-link" href="why.php">Why Us</a>
                </li>
                <li class="nav-item   <?php if($pgnm=="showconfirmorder") echo "active";?>">
                  <a class="nav-link" href="showconfirmorder.php">My Orders</a>
                </li>
				<li class="nav-item   <?php if($pgnm=="sellproduct") echo "active";?>">
                  <a class="nav-link" href="sellproduct.php">Sell Product</a>
                </li>
				  
				
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
	</html>
