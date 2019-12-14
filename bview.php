<!DOCTYPE html>
<html>

<head>
    <title>Meter Readings</title>
    <link rel="stylesheet" href="cviewd.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="admin_dshbord.js">
    </script>
</head>

<body>
    <div class="whole">
<div class="content">
        <table>
            <tr>
                <th>Customer Id</th>
                <th>Bank</th>
                <th>Branch</th>
                <th>Account</th>
                <th>Balance</th>
            </tr>
           <?php
        $con=mysqli_connect("localhost","root","","vidyutaan");
        if($con->connect_error){
            die("Connection failed:".$con->connect_error);
        }
        $query=mysqli_query($con,"select * from pay");
        if($query->num_rows>0){
            while($row=mysqli_fetch_assoc($query)){
                echo"<tr><td>".$row["email_id"]."</td><td>".$row["bank"]."</td><td>".$row["branch"]."</td><td>".$row["account"]."</td><td>".$row["bal"]."</td>";
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