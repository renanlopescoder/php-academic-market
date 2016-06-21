<?php
  require_once("UsuarioController.php");
    logout();
  $_SESSION['logout'] = 'Deslogado com sucesso';
  header("Location: index.php");
  die();
