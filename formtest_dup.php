<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="f_dup.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="formtest_navjs.js">
    </script>
</head>

<body>
    <div class="whole">
        <div class="hnav">
        <div id="sidemenu">
            <ul>
                <li><a href="mr_update.php">Meter Reading</a></li>
                <li><a href="bill.php">Pay Bill</a></li>
                <li><a href="receipt.php">View last receipt</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>

            <div id="sidebar_btn" onclick="shownav()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
            <h1>Welcome <?php echo $login_session;?>! </h1>
<div class="content">
            <a href="meter_info.php" alt="Enter meter info" class="meter"></a>
            <a href="paydetails.php" alt="Enter bank info" class="pay"></a>
         <!--   <button class="button1"  >Meter Entry</button>
            <button class="button2" >Payment Info</button>-->
            </div>
         </div>        
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="x1.jpg" style="width:100%, height:562px, margin-left:auto,margin-right:auto">
  <div class="text">Our ultimate energy source!</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="x4.jpg" style="width:100%, height:562px,margin-left:auto,margin-right:auto">
  <div class="text1">Around 40,000,000 e-waste is produced every year.</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="x5.jpg" style="width:100%, height:562px,margin-left:auto,margin-right:auto">
  <div class="text">Vidyutaan now electrifying thousands of distant villages!</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
   
</div>
</body>

</html>