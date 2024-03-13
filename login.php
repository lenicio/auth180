<?php
session_start();
$_SESSION['usuario'] = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="./realizarLogin.php" method="POST">
    <input type="text" name="matricula" placeholder="Informe sua matricula...">
    <br>
    <input type="password" name="senha" placeholder="Informe sua senha...">
    <br>
    <input type="submit" value="Login">
  </form>
</body>
</html>