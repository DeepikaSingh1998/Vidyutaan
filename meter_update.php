<?php
//session_start();
include('session.php');
$connection=mysqli_connect("localhost","root","","vidyutaan")or die("not connected");
if(!$connection)
{
    echo"<p>Connection couldn't be made</p>";
}
else{
    //$umi is meter_id;
    if($umi!='')
    {//this is to update bill and fine sort of stuffs.
        
        $meter_tuple=mysqli_query($connection,"select * from meter where meter_id='$umi'")or die("Couldn't connect");
        if($meter_tuple){
        $row=mysqli_fetch_array($meter_tuple,MYSQLI_BOTH);
        $lpd=$row['last_paydate'];//last_payment
        $date = date($lpd);
        $current = date("m",strtotime($date));
        $next = date("m",strtotime($date."+1 month"));
        if($current==$next-1){
            $needed = date('Y-m-d',strtotime($date." +1 month"));
        }else{
            $needed = date('Y-m-d', strtotime("last day of next month",strtotime($date)));
        }
        //needed is due_date;
        $lv=date('y/m/d');
        $bill=$row['power_usage']*5;
       $query=mysqli_query($connection,"update meter
       set last_paydate='$lpd', due_date='$needed', bill='$bill', last_visit='$lv'
       where meter_id='$umi'
       ")or die("Couldn't update");
    }

      //  $insmr=mysqli_query($connection,"insert into meter_readings(meter_fk,prev_reading,current_reading) values('$umi','$pread','$cread')")or die("Couldn't connect");
     // header("Location: formtest_dup.php");
    }


mysqli_close($connection);
}
?>