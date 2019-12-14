<!DOCTYPE html>
<html>

<head>
    <title>View Customers</title>
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
                <th>Id</th>
                <th>Username</th>
                <th>EmailId</th>
                <th>Contact</th>
                <th>UMI</th>
                <th>Address</th>
                <th>Password</th>
            </tr>
           <?php
        $con=mysqli_connect("localhost","root","","vidyutaan");
        if($con->connect_error){
            die("Connection failed:".$con->connect_error);
        }
        $query=mysqli_query($con,"select * from customer");
        if($query->num_rows>0){
            while($row=mysqli_fetch_assoc($query)){
                echo"<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email_id"]."</td><td>".$row["contact_no"]."</td><td>".$row["meter_id"]."</td><td>".$row["address"]."</td><td>".$row["password"].'</td><td><a href="delid.php?del='.$row['email_id'].'&caller=cust_view.php"><img src="del.png"></a>';
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