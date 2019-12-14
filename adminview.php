<!DOCTYPE html>
<html>

<head>
    <title>View Customers</title>
    <link rel="stylesheet" href="cviewd.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    </script>
</head>

<body>
    <div class="whole">
        </a>
        <div class="content">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Admin</th>
                    <th>Last Visit</th>
                </tr>
                <?php
        $con=mysqli_connect("localhost","root","","vidyutaan");
        if($con->connect_error){
            die("Connection failed:".$con->connect_error);
        }
        $query=mysqli_query($con,"select * from admins");
        if($query->num_rows>0){
            while($row=mysqli_fetch_assoc($query)){
                $caller='adminview.php';
                
                $url= "http://localhost/electric_bill/delid1.php?del=".$row['id']."";
                echo"<tr><td>".$row["id"]."</td><td>".$row["ad_name"]."</td><td>".$row["reg_date"].'</td><td><a href="'.$url.'"><img src="del.png"></a>';
            }
            echo"</table>";
        }
        else{
            echo"0 results";
        }
        mysqli_close($con);
        ?>
            </table>
        </div>
    </div>
</body>

</html>