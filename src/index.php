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
			<a href="index.php" class="textlogo">HSLib</a>
			<img class="imglogo" src="res/HSWRO-logo.png"/>
		</div>

		<!-- Menu bar -->
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="booklist.php">Booklist</a></li>
				<?php
					if( $loggedIn )
						echo '<li class="login"><a href="panel.php">User panel</a></li>';
					else
						echo '<li class="login"><a href="login.php">Login/Register</a></li>';
				?>
				</ul>
		</div>

		<!-- Content -->
		<div class="content">

		</div>	
		
		<!-- Footer -->
		<div class="footer">
			This work by <a xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/jesusthekiller/HSLib" property="cc:attributionName" rel="cc:attributionURL">jesusthekiller</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
		</div>
	</body>
</html>
