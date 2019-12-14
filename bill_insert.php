<?php
include('bill_fetch.php');
$conn=mysqli_connect('localhost','root','','vidyutaan') or die("not connected");
if(!$conn)
{
    echo"<p>Not Connected</p>";
}else{
if(isset($_POST['submit'])){
    $mode=$_POST['mode'];
    $q1=mysqli_query($conn,"select * from news");
    $tup=mysqli_fetch_array($q1,MYSQLI_BOTH);
    $c=$tup['payments']+1;
    
    $q2=mysqli_query($conn,"insert into news(payments) values('$c')");
        $query=mysqli_query($conn,"insert into transaction(meter_id,amount,mode) values('$umi','$amount','$mode')");
        if(isset($_POST['receipt']))
        {
           header("Location: receipt.php");
        }
        else{
            header("Location: finalpage.php?");
        }
}

    

mysqli_close($conn);}
?>
