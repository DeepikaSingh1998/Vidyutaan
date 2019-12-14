<?php
session_start();
$connection=mysqli_connect("localhost","root","","vidyutaan")or die("not connected");
if(!$connection)
{
    echo"<p>Connection couldn't be made</p>";
}
else{
if(isset($_POST["submit"])){
    $email_id=$_POST["email_id"];
    $password=$_POST["password"];
    if($email_id!=''&&$password!='')
    {
        $query=mysqli_query($connection,"select * from customer where email_id='$email_id' and password='$password'")or die("Couldn't connect");
       $row=mysqli_fetch_array($query,MYSQLI_BOTH);
       if($row['email_id']==$email_id&&$row['password']==$password){
            $_SESSION['login_user']=$email_id;
            $_SESSION['loggedin']=true;
            header("Location: profile.php");
        
    }
    else{
        echo"Failed to login";
    }
    }

}
mysqli_close($connection);
}
?>