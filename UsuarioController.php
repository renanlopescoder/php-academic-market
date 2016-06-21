<?php
session_start();

  function login($email){
    $_SESSION["usuario_logado"] = $email;
  };

  function logout(){
    session_destroy();
    session_start();
  }

  function verificaUsuario(){
    if(!isset($_SESSION["usuario_logado"])) {
      $_SESSION['danger'] = 'Funcionalidade Restrita';
      header("Location: index.php");
      die();
    };
  }

?>
