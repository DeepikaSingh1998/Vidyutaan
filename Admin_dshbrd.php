<?php

$conn=mysqli_connect('localhost','root','','vidyutaan') or die("not connected");
$q1=mysqli_query($conn,"select * from news");
$tup=mysqli_fetch_array($q1,MYSQLI_BOTH);
$c=$tup['customers'];
$t=$tup['transactions'];
$p=$tup['pending'];
?><!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_dshbrd.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="admin_dshbord.js"></script>
    <style>
.news_container {
    width: 500px;
    height: 800px;
    margin-left:70px;
}
.news{
    width:400px;
    height:150px;
    color:#fff;
    background-color: rgba(0, 0, 0, 0.5);
    margin:30px;
    border:none;
    border-radius:15px;
}
.news h2{
    margin-top:30px;
    padding:20px;
    text-align:center;
}
.news:hover{
    
    box-shadow: 9px 9px 9px 7px rgba(0, 0, 0, 0.8);
    color: #FFf;
    border: 2px solid #FFf;
}
    </style>
</head>

<body>
    <div class="whole">
        <button id="reg_btn" onclick="reg()">Login</button>
        <a href="formtest.php"><img src="back2.png" id="back">
        </a>
        <div class="news_container">
        <h1>Lately in Vidyutaan,</h1>
        <div class="news">
        <h2><?php echo $c;?> new Customers</h2>
</div> 
        <div class="news">
        <h2><?php echo $t;?> new Payments</h2>
</div> 
        <div class="news">
        <h2><?php echo $p;?> new Pending</h2>
</div> 
       </div>
        <div id="Registerid" class="RegisterClass">
            <form action="ad_insert.php" method="POST">
                <p>Name</p>
                <input type="text" name="ad_name" placeholder="Name">
                <input type="password" name="pas" placeholder="Password">
                <input type="submit" name="submit" placeholder="Submit">
            </form>
        </div>
    </div>
</body>

</html>