<?php
  require_once('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once("CategoriaDAO.php");
    $categorias = listaCategorias($conexao);
?>
<?php
  require_once("header.php");
?>
<div class="padding-top">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="wow fadeInRight" data-wow-duration=".75s">Formulário</h1>
      <h1 class="wow fadeInRight" data-wow-duration="1.25s">Adiciona Produto</h1>
      <br>
    </div>
  </div>
      <form class="form-horizontal wow fadeInRight" action="produto-action-adiciona.php" method="POST">
        <fieldset>
          <?php require_once('produto-form-base.php'); ?>
          <div class="row">
          <div class="form-group">
            <div class="col-md-4 col-md-offset-1">
              <button type="reset" class="btn btn-default btn-rounded">Limpar</button>
              <button type="submit" class="btn btn-primary btn-rounded">Salvar</button>
            </div>
          </div>
        </div>
        </fieldset>
      </form>
  </div>
  </div>
<?php require_once("footer.php"); ?>
