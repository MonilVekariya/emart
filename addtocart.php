<?php
session_start();
if(isset($_SESSION["user_name"]))
	{
		$usn=$_SESSION["user_name"];
        $id = $_GET["id"];
        include_once("dbconnect.php");
        //INSERT INTOorder_tb (`o_id`, `cart_date`, `cu_id`, `i_id`, `i_quantity`, `i_rate`, `i_amount`, `order_date`, `dispach_date`) 
        $sql="SELECT * FROM  item_tb where i_id=$id";
        $rs=mysqli_query($con,$sql);
        $row = mysqli_fetch_array($rs);

        

	
	}
	else
	{
        echo "<script>alert('please Login First..');</script>";
        header("Refresh:0.01;url=signin.php");
	}

    include_once("header.php");
?>
<script type="text/javascript">
  function calamt()
  {
    rt=document.cartf.pdisprice.value;
    qty=document.cartf.qty.value;

    amt= qty * rt;
    document.cartf.amt.value=amt;
  }
</script>




<section class="about_section">
    <div class="container-fluid  ">
      <div class="row">
      <div class="col-md-6 px-0">
          <div class="img-box ml-5">

          
          <img src="admin/photos/<?php echo $row['i_image']; ?>" alt="" height="auto" width="auto" >

          </div>
        </div>
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                <?php echo $row['i_name']  ?>
              </h2>
            </div>
            <h4>Price : Rs. <s><?php echo $row['i_price']  ?></s></h4>
            <h4>Discounted Price : Rs.<?php echo $row['i_disprice']  ?></h4>
            

            <form method="POST" action="addtocartpro.php" name="cartf">
                    <select name = "qty" class="form-control" onchange="calamt()" id="qty" required="true">
                      <option value="">Select Quantity</option>
                       <option value="1">1</option>
                        <option value="2">2</option>
                       <option value="3">3</option>
                    </select>
                    <br>
                    Amount :
                    <input type="text" readonly="true" name="amt" class="form-control">
                    <input type="hidden" value="<?php echo $id; ?>" name= "pid">
                    <input type="submit" class="btn btn-success">
                    <input type="hidden" value="<?php echo $row['i_disprice']; ?>" name= "pdisprice">
            </form>
            
          </div>
        </div>

        
      </div>
    </div>
  </section>
  
<?php

include_once("footer.php");

?>