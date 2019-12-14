<?php
$connection=mysqli_connect("localhost","root","","vidyutaan")or die("not connected");
if(!$connection)
{
    echo"<p>Connection couldn't be made</p>";
}
else{
    echo"<p>Connection made</p>";
if(isset($_POST["submit"])){
    $umi=$_POST["meter_id"];
    $installation=$_POST["installation"];
    //generate random nos. on the basis of user choice for factory,home ,hospital or educational organisation
    $cread=rand(8000,12000)/10;
    $pread=0.0; 
    if($umi!=''&&$installation!='')
    {
        $insmr=mysqli_query($connection,"insert into meter_readings(meter_fk,prev_reading,current_reading) values('$umi','$pread','$cread')")or die("Couldn't connect");
        $mr_tuple=mysqli_query($connection,"select * from meter_readings where meter_fk='$umi'")or die("Couldn't connect");
        $row=mysqli_fetch_array($mr_tuple,MYSQLI_BOTH);
        $d=date('y/m/d');
        $power_usage=$row['power_usage'];
        $bill=$power_usage*5;
        $idt=$row['id'];
        $date = date($installation,);
        $current = date("m",strtotime($date));
        $next = date("m",strtotime($date."+1 month"));
        if($current==$next-1){
            $needed = date('Y-m-d',strtotime($date." +1 month"));
        }else{
            $needed = date('Y-m-d', strtotime("last day of next month",strtotime($date)));
        }
        $insm=mysqli_query($connection,"insert into meter(id,meter_id,installation,power_usage,last_paydate,due_date,bill,last_visit) values('$idt','$umi','$installation','$power_usage','$installation','$needed','$bill','$d')");
      header("Location: formtest_dup.php");
    }

}
mysqli_close($connection);
}
?>