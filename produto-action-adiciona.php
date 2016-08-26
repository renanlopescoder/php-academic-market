<?php
  require_once('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once("model/Produto.php");
  require_once("model/Categoria.php");
  require_once("ProdutoDAO.php");
  require_once("header.php");
?>
<?php
  $produto = new Produto();
  $categoria = new Categoria();
  $categoria->id           = $_POST['categoria_id'];
  $produto->nome           = $_POST['nome'];
  $produto->preco          = $_POST['preco'];
  $produto->descricao      = $_POST['descricao'];
  $produto->quantidade     = $_POST['quantidade'];
  $produto->estoque_minimo = $_POST['estoque_minimo'];
  $produto->categoria      = $categoria;
  //Saber se contém algo no 'usado' no post pois checkbox não passa parâmetro caso não marcado
  if (array_key_exists('usado', $_POST)) {
    $usado='1';
  } else {
    $usado='0';
  }
  $produto->usado = $usado;
?>
<?php
  if (insereProduto($conexao,$produto)) {
?>

<div class="row">
  <div class="col-md-12 text-center padding-top">
    <p class="text-success">
      Produto <?php echo $produto->nome;?> Preço R$ <?php echo $produto->preco; ?> adicionado com sucesso
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
      Produto: <?php echo $produto->nome;?> não pode ser adicionado<br>
      Erro: <?php echo $msg?>
    </p>
  </div>
</div>

<?php }; ?>

<?php require_once("footer.php");?>
