<?php
$connection=mysqli_connect("localhost","root","","vidyutaan")or die("not connected");
if(!$connection)
{
    echo"<p>Connection couldn't be made</p>";
}
else{
    session_start();
    $login_id=$_SESSION['login_user'];
    echo"<p>Connection made</p>";
    $q1=mysqli_query($connection,"select * from customer where email_id='$login_id'")or die("Couldn't connect");
  $ro1=mysqli_fetch_array($q1,MYSQLI_BOTH);
    $m_id=$ro1['meter_id'];
    $q2=mysqli_query($connection,"select * from meter where meter_id='$m_id'")or die("Couldn't connect");
    $ro=mysqli_fetch_array($q2,MYSQLI_BOTH);
    $idt=$ro['id'];
if(isset($_POST["submit"])){
    $bank=$_POST["bank"];
    $branch=$_POST["branch"];
    $account=$_POST["account"];
    $bal=rand(10000,5000000);
    echo"<p>".$idt."</p>";
    if($bank!=''&&$branch!=''&&$account!='')
    {
        $query=mysqli_query($connection,"insert into pay(id,email_id,bank,branch,account,bal) values('$idt','$login_id','$bank','$branch','$account','$bal')")or die("Couldn't connect");
      header("Location: formtest_dup.php");
    }

}
mysqli_close($connection);
}
?>