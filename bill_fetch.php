<?php
session_start();
$connection=mysqli_connect("localhost","root","","vidyutaan")or die("not connected");
if(!$connection)
{
    echo"<p>Connection couldn't be made</p>";
}
else{

    $login_id=$_SESSION['login_user']; 
     $cust=mysqli_query($connection,"select * from customer where email_id='$login_id'")or die("Couldn't connect");
     $custrow=mysqli_fetch_array($cust,MYSQLI_BOTH);
     $umi=$custrow['meter_id'];
     $name=$custrow['name'];
     //natural join of meter and pay over ids.
     $join=mysqli_query($connection,"select meter.power_usage, meter.due_date, meter.bill, meter.fine, pay.bank, pay.branch, pay.account
      from meter, pay 
      where pay.email_id='$login_id' and pay.id=meter.id ")or die("Couldn't connect");
    
     $tuple=mysqli_fetch_array($join,MYSQLI_BOTH);
     $bank=$tuple['bank'];
     $due=$tuple['due_date'];
     $branch=$tuple['branch'];
     $bill=$tuple['bill'];
     $fine=$tuple['fine'];
     $power_usage=$tuple['power_usage'];
     $account=$tuple['account'];
     $amount=$bill+$fine;
     //header("Location:bill.php");

mysqli_close($connection);
}
?>