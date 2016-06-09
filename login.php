<?php

	if (isset($_SESSION['UserName'])) 
	{
 		header('Location: welcome.php');
	}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
		<link href="css/login.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		
	 <img src="banner1.jpg" width="100%" height="210px" alt=""/>


        <div class="wrapper">
		<div class="container">
       <div id="lognotif"></div>
		<h1>Login</h1>
		 <form class="form" form id="login" action="login_process.php" method="post">
		
			<input type="text" name="UserName" id="username"  placeholder="Username">
			<input type="password" name="Password" id="Password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>



			</div>
			
		</div>
		<br>
		<div id="profile">
		</div>
    </body>
</html>
