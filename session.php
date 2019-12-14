<?php
$connection=mysqli_connect("localhost","root","","vidyutaan");
session_start();
//store session
$user_check=$_SESSION['login_user'];
//sqlquery to fetch complete info of user
$ses_sql=mysqli_query($connection,"select * from customer where email_id='$user_check'");
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['name'];
$umi=$row['meter_id'];
$login_id=$row['email_id'];
if(!isset($login_session)){
    mysqli_close($connection);
    header('Location: formtest.php');
}
?>