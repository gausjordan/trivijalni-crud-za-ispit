<?php

	# Sigurnosna mjera
	define('__Dinamo__', TRUE);

	session_start();
	include("dbconn.php");

	# Casting meni izbora u integere
	if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# Provjera forme, sadrzaj mora biti tipa String.
	if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }

	echo '
		<!DOCTYPE HTML>
		<html>
			<head>
				<title>EcoPick empire</title>
				<meta http-equiv="content-type" content="text/html; charset=UTF-8">
				<meta name="description" content="Prvi blok zadataka eko cackalice portal">
				<meta name="keywords" content="Programiranje, web, aplikacija, Eko, cackalice, čačkalice, portal">
				<meta name="author" content="Armando Filipi">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="shortcut icon" type="image/x-icon" href="ikona.ico">
				<link rel="stylesheet" href="stil.css">';

	echo '
			</head>
	';

	echo '<body>';

		echo '
			<header>
				<div class="cover-image">';
					include("api.php");
		echo'	</div>
				<nav>';
					include("menu.php");
		echo '	</nav>
			</header>
		';
		
		echo '<main>';

			if (isset($_GET['menu'])) {
				switch($_GET['menu']) {
					case 1:
						include("home.php");
						break;
					case 2:
						include("news.php");
						break;
					case 3:
						include("contact.php");
						break;
					case 4:
						include("about.php");
						break;
					case 5:
						include("gallery.php");
						break;
					case 6:
						include("register.php");
						break;
					case 7:
						include("signin.php");
						break;
					case 8:
						include("admin.php");
						break;
					case 9:
						include("signout.php");
						break;
					case 10:
						include("addnews.php");
						break;
					case 11:
						include("editnews.php");
						break;
					case 12:
						include("newsdetails.php");
						break;
				}
			}
			
			else
				include("home.php");

		echo '</main>';

		echo '
			<footer>
				<p>Copyright &copy; 2021. Armando Filipi. <a href="https://github.com/gausjordan/ntpws4"><img src="img/GitHub-Mark-64px.png" style="filter: invert(1)" title="Github" alt="Github"></a></p>
			</footer>
		';

	echo '</body>';
	echo '</html>';
?>