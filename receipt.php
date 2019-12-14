<?php
include("bill_fetch.php");
$con=mysqli_connect("localhost","root","","vidyutaan");
$q=mysqli_query($con,"select * from transaction where meter_id='$umi'");
$row=mysqli_fetch_array($q,MYSQLI_BOTH);
$mode=$row['mode'];
$d=date('m/d/y');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Receipt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            position: fixed;
            margin: 0%;
            padding: 0%;
            font-family: Arial, Helvetica, sans-serif;
            width: 100vw;
            height: 100vh;
            background-color: #f2f2f2;
        }
        
        .rec {
            margin-top:30px;
            position: absolute;
            width: 800px;
            margin-left: 290px;
            height: 100%;
            border: 1px solid grey;
            background-color: #fff;
        }
        
        .rec h1 {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .row {
            position: absolute;
            margin-left: 80px;
            margin-top: 50px;
        }
        
        .row h3 {
            display: inline;
        }
        
        .row p {
            display: inline-block;
            margin-right: 30px;
        }
        
        .consumer {
            font-size: 12px;
            line-height: 2px;
            margin-left: 20px;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>
    <div class="rec">
        <h1>Vidyutaan Bill Payment Receipt</h1>
        <div class="consumer">
            <p>Consumer Id: <?php echo $login_id;?></p>
            <p>Meter Id:<?php echo $umi;?></p>
            <p>Address: <?php echo $custrow['address'];?></p>
        </div>
        <div class="row">
            <h3>Transaction Mode: </h3>
            <p><?php echo $mode;?></p>
            </br>
            <h3>Bill: </h3>
            <p>Rs. <?php echo $bill;?></p>
            </br>
            <h3>Fine: </h3>
            <p>Rs. <?php echo $fine;?></p>
            </br>
            <h3>Amount: </h3>
            <p>Rs. <?php echo $amount;?></p>
            </br>
            <h3>Date of Payment: </h3>
            <p><?php echo $d;?></p>
            </br>
            <h3>Bank: </h3>
            <p><?php echo $bank;?></p>
            </br>
            <h3>Branch: </h3>
            <p><?php echo $branch;?></p>
            </br>
            <h3>Account No.: </h3>
            <p><?php echo $account;?></p>
            </br>
        </div>
    </div>
</body>

</html>