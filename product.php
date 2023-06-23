<?php
session_start();
include_once("header.php");
include_once("dbconnect.php");

$sql="select * from item_type_tb order by it_typename";
$rs=mysqli_query($con,$sql);

$pttype="<select name= 'it_id'>";


    $pttype=$pttype."<option value= '0' required='true'>Select Type</option>";

    while($row=mysqli_fetch_array($rs))
{
    $pttype=$pttype."<option value= ".$row['it_id'].">".$row['it_typename']."</option>";
}

    $pttype=$pttype."</select>";
?>


  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
		  </h2>
		 <?php
		 $sql="SELECT * FROM item_tb ORDER BY i_id";

			if ($result=mysqli_query($con,$sql))
			  {
			  // Return the number of rows in result set
			  $rowcount=mysqli_num_rows($result);
			  echo "<br>"."Total Products: ",$rowcount;
			  // Free result set
			  mysqli_free_result($result);
			  }
			  ?>
        
      <form method="POST" action="product.php" >
        <?php echo $pttype; ?>
        <input type="submit" class="btn btn-success" value="search" name="searchbtn">
      </form>
      </div>
      <div class="row">

        <?php

          if(isset($_POST['searchbtn']))
          {
            if ($_POST['it_id']==0) 
            {
              $sql="select * from item_tb";
            }
            else 
            {
              $sql="select * from item_tb where it_id = ".$_POST['it_id'];
            }
          }
          else 
          {
            $sql="select * from item_tb";  
          }

          
          $res=mysqli_query($con,$sql);

          while($row=mysqli_fetch_array($res))
          {


        ?>


        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="admin/photos/<?php echo $row['i_image']; ?>">
              <a href="addtocart.php?id=<?php echo $row['i_id']; ?>" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
               <?php echo $row['i_name']  ?>
              </h5>
              <div class="product_info">
                <h5>
                  <span>Rs.</span> <?php echo $row['i_disprice']; ?>
                </h5>
                <h6><span>Rs.</span><s><?php echo $row['i_price'];  ?></s></h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <?php
          }
        ?>
      </div>
      
    </div>
  </section>

<?php

include_once("footer.php");

?>