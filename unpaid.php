<!DOCTYPE html>
<html>

<head>
    <title>Late Payments</title>
    <link rel="stylesheet" href="cviewd.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="admin_dshbord.js">
    </script>
</head>

<body>
    <div class="whole">
        </a>
<div class="content">
        <table>
            <tr>
                <th>Customer Name</th>
                <th>Customer Id</th>
                <th>UMI</th>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Last Payment</th>
            </tr>
           <?php
        $con=mysqli_connect("localhost","root","","vidyutaan");
        if($con->connect_error){
            die("Connection failed:".$con->connect_error);
        }
        $query=mysqli_query($con,"select customer.name, customer.email_id, customer.meter_id, meter.meter_id, meter.last_paydate, meter.due_date, meter.bill, meter.fine
        from customer, meter
        where customer.meter_id=meter.meter_id");
        if($query->num_rows>0){
            while($row=mysqli_fetch_assoc($query)){
                $amount=$row['bill']+$row['fine'];
                $date=date('y/m/d');
                if($row['fine']>0){
                echo"<tr><td>".$row["name"]."</td><td>".$row["email_id"].'</td><td>'.$row["meter_id"]."</td><td>".$amount."</td><td>".$row["due_date"]."</td><td>".$row["last_paydate"].'</td><td><a href="delid.php?del='.$row['email_id'].'"><img src="del.png"></a>';
            }
        }
            echo"</table>";
        }
        else{
            echo"0 results";
        }
        mysqli_close($con);
        ?>
        </table></div>
    </div>
</body>

</html>