<?php
include('meter_update.php');

$connection=mysqli_connect("localhost","root","","vidyutaan")or die("not connected");
if(!$connection)
{
    echo"<p>Connection couldn't be made</p>";
}
else{

    $login_id=$_SESSION['login_user']; 
     $cust=mysqli_query($connection,"select * from customer where email_id='$login_id'")or die("Couldn't connect");
     $custrow=mysqli_fetch_array($cust,MYSQLI_BOTH);
     $umi=$custrow['meter_id'];
     $name=$custrow['name'];
     //natural join of meter and pay over ids.
     $join=mysqli_query($connection,"select meter.power_usage, meter.due_date, meter.bill, meter.fine, pay.bank, pay.branch, pay.account, meter_readings.current_reading, meter_readings.prev_reading
      from meter, pay , meter_readings
      where pay.email_id='$login_id' and pay.id=meter.id ")or die("Couldn't connect");
    
     $tuple=mysqli_fetch_array($join,MYSQLI_BOTH);
     $bank=$tuple['bank'];
     $due=$tuple['due_date'];
     $branch=$tuple['branch'];
     $bill=$tuple['bill'];
     $fine=$tuple['fine'];
     $c=$tuple['current_reading'];
     $p=$tuple['prev_reading'];
     $power_usage=$tuple['power_usage'];
     $account=$tuple['account'];
     $amount=$bill+$fine;
     //header("Location:bill.php");

mysqli_close($connection);
}
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
        <h1>Meter Reading</h1>
        <div class="consumer">
            <p>Consumer Id: <?php echo $login_id;?></p>
            <p>Meter Id:<?php echo $umi;?></p>
            <p>Address: <?php echo $custrow['address'];?></p>
        </div>
        <div class="row">
            <h3>Previous Reading: </h3>
            <p><?php echo $p;?></p>
            </br>
            <h3>Current Reading: </h3>
            <p><?php echo $c;?></p>
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
            <h3>Due date: </h3>
            <p><?php echo $due;?></p>
            </br>
        </div>
    </div>
</body>

</html>
