<?php
  require("connection.php");

  if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $con->prepare ("SELECT * FROM users WHERE username='username' and password='$password'");
    $stmt->bindParam(":username", '$username');
    $stmt->execute();
    $userExists = $stmt->fetchAll();
    var_dump($userExists);

    $passwordHashed = $userExists[0]["password"];
    $checkPassword = password_verify($password, $passwordHashed);

    if($checkPassword === false){
      echo "Login fehlgeschlagen, Passwort stimmt nicht überein";
    }
    if($checkPassword === true){

      session_start();
      $_SESSION["username"] = $userExists[0]["username"];

      header("Location: homepage.php");
    }
  }
 ?>

<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="homepage.php" method="POST">
        <h1>Login</h1>
        <div class="inputs_container">
            <input type="text" placeholder="Benutzername" name="username" autocomplete="off">
            <input type="password" placeholder="Passwort" name="password" autocomplete="off">
        </div>
        <button name="submit">Login</button>
    </form>
</body>
</html>
