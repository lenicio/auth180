<?php
session_start();
require "./auth.php";

if (!empty($_POST['matricula']) && !empty($_POST['senha'])) {
  require "./config.php";

  $matricula = $_POST['matricula'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM usuarios WHERE matricula = :matricula AND senha = :senha";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(":matricula", $matricula);
  $sql->bindValue(":senha", $senha);
  $sql->execute();

  $usuario = $sql->fetch(PDO::FETCH_ASSOC);

  // Validação se o usuário existe no banco de dados, e a senha corresponde a informada
  if ($usuario) {

    $_SESSION['usuario'] = [
      'matricula' => $matricula,
      'permissao' => false
    ];

    if (($usuario['permissao'] == 1)) {
      $_SESSION['usuario']['permissao'] = true;
      header("Location: ./gestao.php");
      exit();

    } else {
      header("Location: ./index.php");
      exit();
    }
  }
}

header("Location: ./login.php");
