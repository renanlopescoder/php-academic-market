<?php
  require_once ('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once ('header.php');
  require_once ("model/Categoria.php");
  require_once ("CategoriaDAO.php");
?>
<?php
  $categoria = new Categoria();
  $categoria->nome = $_POST['nome'];
  if (insereCategoria($conexao,$categoria)) {
?>

<div class="row">
  <div class="col-md-12 text-center padding-top">
    <p class="text-success">
      Categoria <?php echo $categoria->nome;?> adicionada
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
      Categoria: <?php echo $categoria->nome;?> não pode ser adicionado<br>
      Erro: <?php echo $msg?>
    </p>
  </div>
</div>

<?php }; ?>
<?php require_once ("footer.php");?>
