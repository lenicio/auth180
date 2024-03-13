<?php

session_start();


function validarPermissao($admin=false) {
  if($admin) {
    if (empty($_SESSION['usuario']['permissao'])) {
      header("Location: ./login.php");
      exit();
    }
  } else {
    if(empty(($_SESSION['usuario']))) {
      header("Location: ./login.php");
    }
  }
}

function eAdmin() {
  if ($_SESSION['usuario']['permissao'] == 1) {
    return true;
  } else {
    return false;
  }
}
