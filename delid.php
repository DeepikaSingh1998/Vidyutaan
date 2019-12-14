<?php
$con=mysqli_connect("localhost","root","","vidyutaan");
if(isset($_GET['del'])&&$_GET['caller']){
$id=$_GET['del'];
$caller=$_GET['caller'];
//fetch meter_id from customer
$q1=mysqli_query($con,"select * from customer where email_id='$id'");
$tuple=mysqli_fetch_array($q1,MYSQLI_BOTH);
$meter_id=$tuple['meter_id'];
//delete from customer
$q2=mysqli_query($con,"delete from customer where email_id='$id'")or die("Couldn't delete");
//delete on cascade performed using natural join.
$query=mysqli_query($con,"delete from meter_readings,meter using meter_readings inner join meter 
where meter.meter_id='$meter_id' and meter.id=meter_readings.id")or die("Couldn't Delete");
$q3=mysqli_query($con,"delete from pay where email_id='$id'")or die("Couldn't Delete from pay");
//echo"<meta http-equiv='refresh' content='0;url=cust_view.php>";
header("Location: cust_view.php");
mysqli_close($con);
}
?>