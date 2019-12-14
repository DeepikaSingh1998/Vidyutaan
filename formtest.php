<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="form.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="formtest_navjs.js">
    </script>
</head>

<body>
    <div class="whole">
        <div id="sidemenu">
            <ul>
                <li><a href="splashpage.php">Home</a></li>
                <li><a href="#">Concessions</a></li>
                <li><a href="#">Average Electricity Consumption</a></li>
                <li><a href="#">Donate</a></li>
                <li><a href="Admin_dshbrd.php">Admin</a></li>
            </ul>

            <div id="sidebar_btn" onclick="shownav()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="content">
            <!--Write button for account creation here-->
            <button class="button1" id="reg" onclick="regi()">Register</button>
            <button class="button2" onclick="logi()">Login</button>
            <div class="welcm">
                <h1>Welcome Aboard! 
</h1>

                        <h3>Vidyutaan is here to walk you through your electric bill payment.</h3>
                        <p>Register and get started with your billing process</p>
                        <p>And don't forget to save electricity!</p>
</div>
                            <!--	<script>
		
	function formopen(){
	document.getElementById('create').style.display ="visible";
}
	</script>
	<div class="slide_anime">
		<img class="mySlides" src="i1.jpg">
		<img class="mySlides" src="i2.jpg">
		<img class="mySlides" src="i3.jpg">

                  for image slides with quotes.......
	</div>-->
                        </div>
            </div>
            <div id="create" class="form">
                <form action="form_insert.php" method="POST">
                    <span>
        <img src="createavt.jpg" alt="create account" class="Avatar"/>
       <!-- <div class="close" onClick="closepage()">
                        <p>X</p>
</div>-->
		<h2>Create Account</h2></span>
                    <p>Name</p>
                    <div class="names">
                        <input type="text" name="name"/></div>
                    <br>
                    <p>Email Id</p>
                    <input type="email"  name="email"/><br>
                    <p>Contact No.</p>
                    <input type="tel"  name="cont"/>
                    <p>UMI(Unique Meter Id)</p><div class="names">
                        <input type="text" name="house_no"  /></div>
                        <p>Address</p><div class="names">
                        <input type="text" name="area"  />
                        </div>
                    <p>Password</p>
                    <input type="password" name="password"/>

                    <input type="submit" placeholder="Submit" name="submit"></form>
                    
            </div>
            <div id="Login" class="form">
                <form action="userlogin.php" method="POST">
                    <span><!--login image here-->
                	<img src="login.png" alt="Login"class="Avatar_log"/>
                    <h2>Login</h2></span>
                    <p>UserId</p>
                    <input type="text" name="email_id"/>
                    <p>Password</p>
                    <input type="password" name="password"/>
                    <input type="submit" name="submit" placeholder="Login" />
                </form>
            </div>
</body>

</html>