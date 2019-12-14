<?php
$con=mysqli_connect("localhost","root","","vidyutaan");
if(isset($_GET['del'])){
$id=$_GET['del'];
//fetch meter_id from customer
$q1=mysqli_query($con,"select * from admins where id='$id'");
$tuple=mysqli_fetch_array($q1,MYSQLI_BOTH);
//delete from customer
$q2=mysqli_query($con,"delete from admins where id='$id'")or die("Couldn't delete");
//delete on cascade performed using natural join.
header("Location: adminview.php");
mysqli_close($con);
}
?>