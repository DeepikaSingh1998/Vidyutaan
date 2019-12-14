<?php
session_start();
$connection=mysqli_connect("localhost","root","","vidyutaan")or die("not connected");

$login_id=$_SESSION['login_user'];
$getmi=mysqli_query($connection,"select * from customer where email_id='$login_id'")or die("Couldn't connect");
    $r=mysqli_fetch_array($getmi,MYSQL_BOTH);
    $m=$r['meter_id'];
    $chk=mysqli_query($connection,"select * from meter_readings where meter_fk='$m'")or die("Couldn't connect");
    $r1=mysqli($chk,MYSQL_BOTH);
    if(!$r1){
        header('Location: meter_info.php');
    }
    else{
       // header('Location: view_info.php');
    }
    ?>