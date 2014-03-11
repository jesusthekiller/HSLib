<?php

//// Main file
// Initialize session
session_start();

// Initialize some vars
$loggedIn = isset( $_SESSION['login'] );
global $loggedIn;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>HSLib - Index</title>
		
		<!-- Load CSS -->
		<link href="css/global.css" rel="stylesheet" type="text/css" />
		<link href="css/index.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<!-- Logo bar -->
		<div class="logo">
			<img class="imglogo" src="res/HSWRO-logo.png"/>
			<a href="index.php" class="textlogo">HSLib</a>
		</div>

		<!-- Menu bar -->
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="booklist.php">Booklist</a></li>
				<li class="login"><a href="login.php">Login</a></li>
			</ul>
		</div>

		<!-- Content -->
		<div class="content">

		</div>	
		
		<!-- Footer -->
		<div class="footer">
			<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/4.0/80x15.png" /></a><br />This work by <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">jesusthekiller</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
		</div>
	</body>
</html>
