<?php
  require_once('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once("model/Categoria.php");
  require_once("categoriaDAO.php");
  require_once("header.php");
?>
<?php
  $categoria = new Categoria();
  $categoria->id             = $_POST['id'];
  $categoria->nome           = $_POST['nome'];
?>
<?php
  if (alteraCategoria($conexao,$categoria)) {
?>

<div class="row">
  <div class="col-md-12 text-center padding-top">
    <p class="text-success">
      Categoria <?php echo $categoria->nome;?> foi alterada
    </p>
  </div>
</div>

<?php
  } else {
    $msg = mysqli_error($conexao);
?>

<div class="row">
  <div class="col-md-12 text-center padding-top">
    <p class="text-danger">
      Categoria: <?php echo $categoria->nome;?> não pode ser alterado <br>
      Erro: <?php echo $msg?>
    </p>
  </div>
</div>

<?php }; ?>

<?php require_once("footer.php");?>
