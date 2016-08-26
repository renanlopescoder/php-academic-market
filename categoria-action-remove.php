<?php
  require_once('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once("CategoriaDAO.php");
?>
<?php
  $id = $_POST['id'];
  removeCategoria ($conexao,$id);
  $_SESSION['info'] = 'Categoria removida com sucesso';
  header("Location: categoria-listar.php");
  die();
?>
