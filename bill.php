<?php
include('bill_fetch.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bil.css">
</head>
<body>

<h2>Your Vidyut Bhugtaan</h2>
<p>Please confirm details before Pay</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="bill_insert.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>User Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $name; ?>">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $login_id;?>">
            <label for="expmonth">Due Date</label>
            <input type="text" id="expmonth" name="expmonth" value="<?php echo $due;?>">
            <label for="adr"><i class="fa fa-address-card-o"></i> Power Usage(kWh)</label>
            <input type="text" id="adr" name="address" value="<?php echo $power_usage;?>">

          </div>

          <div class="col-50">
            <h3>Payment</h3>
        <!-- /*<label for="fname">Accepted Transaction Modes</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>*/-->
            <label for="cname">Transaction Mode</label>
            <input type="text" id="cname" name="mode" >
            <label for="ccnum">Account Number</label>
            <input type="text" id="ccnum" name="account" value="<?php echo $account;?>">
            <label for="adr"><i class="fa fa-address-card-o"></i> Bank</label>
            <input type="text" id="adr" name="bank" value="<?php echo $bank;?>">
            <label for="adr"><i class="fa fa-address-card-o"></i> Branch</label>
            <input type="text" id="adr" name="branch" value="<?php echo $branch;?>">
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="receipt"> Get Receipt
        </label>
        <input type="submit" name="submit" value="Pay" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Amount</h4>
      <p>Bill <span class="price">Rs. <?php echo $bill;?></span></p>
      <p>Fine <span class="price">Rs. <?php echo $fine;?></span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rs. <?php echo $amount;?></b></span></p>
    </div>
  </div>
</div>

</body>
</html>
