<?php
  require_once('UsuarioController.php');
  require_once("UsuarioDAO.php");
  $usuario = buscaUsuario ($conexao, $_POST['email'], $_POST['senha']);

  if ($usuario == null) {
    $_SESSION['danger'] = 'Usuário ou senha inválida';
    header("Location: index.php");
  };
  if ($usuario != null) {
    login($usuario['email']);
    header("Location: index.php");
  };
