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
    {//this is to update current and previous reading every time user checks
        
        $mr_tuple=mysqli_query($connection,"select * from meter_readings where meter_fk='$umi'")or die("Couldn't connect");
        $row=mysqli_fetch_array($mr_tuple,MYSQLI_BOTH);
        $pread=$row['current_reading'];
        $cread=$pread+rand(0,5000)/10;
        $insmr=mysqli_query($connection,"update meter_readings
         set prev_reading='$pread',current_reading='$cread'
         where meter_fk='$umi'")or die("Couldn't connect");
      header("Location: mread.php");
    }


mysqli_close($connection);
}
?>