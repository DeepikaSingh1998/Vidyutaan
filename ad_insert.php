<?php
$connection=mysqli_connect('localhost','root','','vidyutaan') or die("not connected");
if(!$connection)
{
    echo"<p>Not Connected</p>";
}else{
if(isset($_POST['submit'])){//fetching variables of form which travels in url
$name=$_POST['ad_name'];
$pas=$_POST['pas'];
$p="Vidyutmin";
if($name!=''&&$pas!=''&&$pas==$p)
{
    $query=mysqli_query($connection,"insert into admins(ad_name) values ('$name')");
    echo "<br/><br/><span>Data inserted successfully</span>";
    header("Location:ad_logged_dsh.php");
}
else{
    echo"<p>Insertion failed<br/> Some fields are blank</p>";
}
}
mysqli_close($connection);//closing connection with server
}
?>

