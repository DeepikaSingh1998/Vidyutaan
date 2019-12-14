<?php
session_start();
$conn=mysqli_connect('localhost','root','','vidyutaan') or die("not connected");
if(!$conn)
{
    echo"<p>Not Connected</p>";
}else{
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $cont=$_POST['cont'];
    $houseno=$_POST['house_no'];
    $area=$_POST['area'];
    $pas=$_POST['password'];
    if($name!=''&&$email!=''&&$cont!=''&&$houseno!=''&&$area!=''&&$pas!='')
    {
        //$space=" ";
        //$space=$area.$space.$city.$space.$state.$space.$pin;
        $q1=mysqli_query($conn,"select * from news");
        $tup=mysqli_fetch_array($q1,MYSQLI_BOTH);
        $c=$tup['customers']+1;
        
        $q2=mysqli_query($conn,"insert into news(customers) values('$c')");
           
        $query=mysqli_query($conn,"insert into customer(name,email_id,contact_no,meter_id,address,password) values('$name','$email','$cont','$houseno','$area','$pas')");
            $_SESSION['login_user']=$email;
            $_SESSION['loggedin']=true;
            echo"<p> You are now logged in</p>";
            header("Location: profile.php");
    
}
    else{
        echo"<p>Insertion failed!<br/> Some fields are blank<p/>";
    }
}
mysqli_close($conn);}
?>
