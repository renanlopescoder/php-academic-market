<?php
  require_once('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once("ProdutoDAO.php");
?>
<?php
  $id = $_POST['id'];
  removeProduto ($conexao,$id);
  $_SESSION['info'] = 'Produto removido com sucesso';
  header("Location: produto-listar.php");
  die();
?>
