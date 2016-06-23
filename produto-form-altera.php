<?php
  require_once ('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once ("header.php");
  require_once ("ProdutoDAO.php");
  require_once ("CategoriaDAO.php");
?>
<?php
  $categorias = listaCategorias($conexao);
  $id         = $_GET['id'];
  $produto    = buscaProduto($conexao,$id);
  $usado      = $produto['usado'] ? "checked='checked'" : ""; //Operador ternário verificando se produto é usado
?>
<div class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="wow fadeInRight" data-wow-duration=".25s">Formulário</h1>
        <h1 class="wow fadeInRight" data-wow-duration=".5s">Alterar Produto</h1>
        <br>
      </div>
    </div>
    <form class="form-horizontal wow fadeInRight" action="produto-action-altera.php" method="POST">
      <fieldset>
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <?php require_once('produto-form-base.php'); ?>
        <div class="row">
          <div class="form-group">
            <div class="col-md-4 col-md-offset-1">
              <button class="btn btn-default" onClick="history.go(-1)">Voltar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<?php require_once("footer.php"); ?>
