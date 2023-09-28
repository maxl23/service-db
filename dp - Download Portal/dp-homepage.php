<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="dp-stylehomepage.css" rel="stylesheet" type="text/css">
	<title>
	     Download Portal Homepage
	</title>
</head>
<body background="../IMG/1.jpg" link="#000" alink="#017bf5" vlink="#000">
	<br />
	<h3 align="center">
		<font face="Lato" size="6">Download Portal Homepage</font>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<font face="cinzel" size="4">
			<a href="dp-Benutzereinstellungen.html">Einstellungen</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="dp-index.html">Ausloggen</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
, herzlich wilkommen im Download-Center!
</font>
</h1>
	<h1 align="center">
		<font face="Lato" color="#017bf5" size="7">
			Du hast dich erfolgreich angemeldet!
		</font>
  </h1>
	<h3 align="center">
		<font face="Lato" color="#000" size="5">

		</font>
	</h3>
	<br />
	<h3 align="center">
	<a href="#">
		<font face="Lato" color="#000">Aktuelle News</font>
	</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="#">
		<font face="Lato" color="#000">Kontaktiere uns</font>
	</a>
	</h3>
</body>
</html>
