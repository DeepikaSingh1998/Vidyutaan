<?php
if(isset($_POST['b1']))
{
    header("Location: mrview.php");
}
else if(isset($_POST['b2']))
{
    header("Location: bview.php");
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="adlog.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="formtest_navjs.js"></script>
    <style>
.aclass {
    width: 100%;
    height: 60px;
    color:#fff;
    right:10px;
    margin-left:100px;top:0%;
}
.bclass, .aclass input[type="submit"]{
    background:transparent;
    border:2px solid #fff;
    border-radius:4px;
    cursor:pointer;
    width:150px;
    color:#fff;
    display:inline-block;
    margin-top:15px;
    margin-left:10px;
    height:40px;
}
.bclass :link{
    text-decoration:none;
    color:#fff;}
    a{
        color:#fff;
    }
    </style>
</head>

<body>
    <div class="whole">

        <div class="content">
            <div id="sidemenu">
                <ul>
                    <li><a href="cust_view.php">View Customers</a></li>
                    <li><a href="transactions.php">Payments</a></li>
                    <li><a href="unpaid.php">Late</a></li>
                    <li><a href="adminview.php">View Admins</a></li>
                    <li><a href="Admin_dshbrd.php">Logout</a></li>
                </ul>

                <div id="sidebar_btn" onclick="shownav()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="aclass">
         <!--  /* <div class="bclass" id="b1"><a href="Admin_dshbrd.php">Meter Reading</a></div>
            <div class="bclass" id="b2"><a href="Admin_dshbrd.php">Logout</a></div>*/-->
            <form action="ad_logged_dsh.php" method="POST">
            <input type="submit" name="b1" placeholder="Meter Readings" value="Meter Readings">
            <input type="submit" name="b2" value="Bank Details"></form>
            </div>
         </div>
    </div>
</body>

</html>