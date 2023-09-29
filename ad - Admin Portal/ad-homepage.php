<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="ad-stylehomepage.css" rel="stylesheet" type="text/css">
	<title>
	     Admin Portal Homepage
	</title>
</head>
<body background="../IMG/1.jpg" link="#000" alink="#017bf5" vlink="#000">
	<br />
	<h3 align="center">
		<font face="Lato" size="6">Admin Portal Homepage</font>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<font face="cinzel" size="4">
			<a href="ad-settings.html">Einstellungen</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="../index.html">Ausloggen</a>&nbsp;&nbsp;&nbsp;&nbsp;
		</font>
	</h3>
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
  <h1 align="center">
    <font face="Lato" color="#000" size="6">
  Hallo
<?php
  session_start();
  echo $_SESSION["username"]
 ?>
</font>
</h1>
	<h1 align="center">
		<font face="Lato" color="#017bf5" size="7">
			Du bist nun im Admin Portal angemeldet!
		</font>
  </h1>
	<h3 align="center">
		<font face="Lato" color="#000" size="5">

		</font>
	</h3>
	<br />
	<h3 align="center">
	<a href="#">
		<font face="Lato" color="#000">phpMyAdmin</font>
	</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="#">
		<font face="Lato" color="#000">Servereinstellungen</font>
	</a>
	</h3>
</body>
</html>
