<?php
session_start();
include_once("header.php");
?>

<!-- slider section -->
<section class="slider_section ">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Welcome to our shop
                </h1>
                <p>
                  We are sale all Electronics Item.You can buy items from us at a higher discount...
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="images/a1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Celebrate Life
                </h1>
                <p>
                  Think how brands like Betty Crocker have created a lifestyle in their marketing.
				  This phrase communiacates that your products crate and celebrate that kind of lifestyle for the buyer...
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="images/a2.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Ideal Choice
                </h1>
                <p>
                  Again,customers liked to be affirmed in their decisions.This phrase communicates that if the customer buys your products, 
				  they will have made an excellent choise...
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="images/a3.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel_btn_box">
      <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<!-- end slider section -->
</div>

<?php

include_once("footer.php");

?>