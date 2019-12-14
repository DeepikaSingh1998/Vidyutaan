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
                <th>Id</th>
                <th>Umi</th>
                <th>Previous Reading</th>
                <th>Current Reading</th>
                <th>Power Usage</th>
            </tr>
           <?php
        $con=mysqli_connect("localhost","root","","vidyutaan");
        if($con->connect_error){
            die("Connection failed:".$con->connect_error);
        }
        $query=mysqli_query($con,"select * from meter_readings");
        if($query->num_rows>0){
            while($row=mysqli_fetch_assoc($query)){
                echo"<tr><td>".$row["id"]."</td><td>".$row["meter_fk"]."</td><td>".$row["prev_reading"]."</td><td>".$row["current_reading"]."</td><td>".$row["power_usage"]."</td>";
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