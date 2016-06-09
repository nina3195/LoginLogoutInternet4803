<?php
	include 'function/login_check.php';
	header("refresh:5,url=welcome.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
		<meta name="author" content="birds">
		<link href="css/login.css" rel="stylesheet">
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		
		  <div class="loginsukses">
		<div class="container">
       <div id="lognotif"></div>
			<h2><div class="panel-header">
				Hello there!
			</div></h2>
			<h2><div class="panel-content">
				Congratulation, <?php echo $_SESSION['UserName'];?>! <br>
				You are successfully logged in.<br>
				:)
			</div></h2>
			
		</div>
		<br>
    </body>
</html>
