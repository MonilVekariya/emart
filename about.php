<?php
session_start();
include_once("header.php");

?>

<!-- about section -->
<style>
  #more{
    display: none;
  }
</style>
<script>
  function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>
<section class="about_section">
  <div class="container-fluid  ">
    <div class="row">
      <div class="col-md-5 ml-auto">
        <div class="detail-box pr-md-3">
          <div class="heading_container">
            <h2>
              We Provide Best For You
            </h2>
          </div>
          <p>
            We provide all type of electrical appliances on one click. This is very easy to understend & use, even for Non-Technical Client also.
            
          
          <span id="dots">
            ...
          </span><span id="more">
          Repellat expedita, deserunt eum soluta rem culpa. Aut, necessitatibus cumque. Voluptas consequuntur vitae aperiam animi sint earum, ex unde cupiditate, molestias dolore quos quas possimus eveniet facilis magnam? Vero, dicta.
          </span></p>
          <a onclick="myFunction()" id="myBtn">Read more</a>
        </div>
      </div>
      <div class="col-md-6 px-0">
        <div class="img-box">
          <img src="images/about-img.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->


<?php

include_once("footer.php");

?>