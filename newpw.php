<?php
global $con;
require "connection.php";

if(isset($_POST["submit"])){
var_dump($_POST);


$password2 = PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);

$stmt = $con->prepare("SELECT * FROM users WHERE username=:username OR email=:email");
$stmt->bindParam(":username", $username);
$stmt->bindParam(":email", $email);
$stmt->execute();

$userAlreadyExists = $stmt->fetchColumn();

if(!$userAlreadyExists){
//Registrieren
registerUser($username, $email, $password);
}
else{
//User existiert bereits
}
}

function registerUser($username, $email, $password){
global $con;
$stmt = $con->prepare("INSERT INTO users(username, email, password) VALUES(:username, :email, :password)");
$stmt->bindParam(":username", $username);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":password", $password);
$stmt->execute();
header("Location homepage.php");
}

?>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neues Passwort</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="login.php" method="POST">
    <h1>Passwort ändern?</h1>
    <div class="inputs_container">
        <input type="text" placeholder="Passwort" name="password" autocomplete="off">
        <input type="password" placeholder="Passwort wiederholen" name="password doubleing" autocomplete="off">
    </div>
    <button name="submit">Ändern!</button>
</form>
</body>
</html>
