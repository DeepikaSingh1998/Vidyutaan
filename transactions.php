<!DOCTYPE html>
<html>

<head>
    <title>View Customers</title>
    <link rel="stylesheet" href="cview.css">
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
                <th>Id</th>
                <th>User Id</th>
                <th>Mode</th>
                <th>UMI</th>
                <th>Bank</th>
                <th>Branch</th>
                <th>Bill</th>
                <th>Fine</th>
                <th>Amount</th>
            </tr>
           <?php
        $con=mysqli_connect("localhost","root","","vidyutaan");
        if($con->connect_error){
            die("Connection failed:".$con->connect_error);
        }
        //natural join of meter and pay over ids.
        //this would show for different meter_ids...
        $join=mysqli_query($con,"select meter.bill, meter.fine, pay.bank, pay.email_id, pay.branch, transaction.id, transaction.meter_id, transaction.amount, transaction.mode
         from meter, pay, transaction 
         where pay.id=meter.id and meter.meter_id=transaction.meter_id")or die("Couldn't connect");
        if($join->num_rows>0){
            while( $tuple=mysqli_fetch_array($join,MYSQLI_BOTH)){
                $umi=$tuple['meter_id'];
                
                echo"<tr><td>".$tuple["id"]."</td><td>".$tuple['email_id']."</td><td>".$tuple['mode']."</td><td>".$umi."</td><td>".$tuple['bank']."</td><td>".$tuple['branch']."</td><td>".$tuple['bill']."</td><td>".$tuple['fine']."</td><td>".$tuple['amount'].'</td><td><a href="delid.php?del='.$row['email_id'].'"><img src="del.png"></a>';
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