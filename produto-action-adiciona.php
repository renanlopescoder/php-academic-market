<?php
  require_once('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once("ProdutoDAO.php");
  require_once("header.php");
?>
<?php
  $nome           = $_POST['nome'];
  $preco          = $_POST['preco'];
  $descricao      = $_POST['descricao'];
  $quantidade     = $_POST['quantidade'];
  $estoque_minimo = $_POST['estoque_minimo'];
  $categoria_id   = $_POST['categoria_id'];
  //Saber se contém algo no 'usado' no post pois checkbox não passa parâmetro caso não marcado
  if (array_key_exists('usado', $_POST)) {
    $usado='1';
  } else {
    $usado='0';
  }
?>
<?php
  if (insereProduto($conexao,$nome,$preco,$descricao,$quantidade,$estoque_minimo,$categoria_id,$usado)) {
?>

<div class="row">
  <div class="col-md-12 text-center padding-top">
    <p class="text-success">
      Produto <?php echo $nome;?> Preço R$ <?php echo $preco; ?> adicionado com sucesso
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
      Produto: <?php echo $nome;?> não pode ser adicionado<br>
      Erro: <?php echo $msg?>
    </p>
  </div>
</div>

<?php }; ?>

<?php require_once("footer.php");?>
