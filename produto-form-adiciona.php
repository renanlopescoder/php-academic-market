<?php
  require_once('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once("connection.php");
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
          <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5 wow fadeInLeft" data-wow-duration="1.25s">
            <div class="md-form">
              <input id="inputNome" type="text" class="form-control" name="nome">
              <label for="inputNome" class="">Nome do Produto</label>
            </div>
          </div>
          <div class="col-md-2">
            <div class="md-form">
              <input id="inputQuantidade" type="number" class="form-control" name="quantidade">
              <label for="inputQuantidade" class="control-label">Quantidade</label>
            </div>
          </div>
          <div class="col-md-2 wow fadeInLeft" data-wow-duration="1.75s">
            <div class="md-form">
              <input id="inputPreco" type="number" class="form-control" name="preco">
              <label for="inputPreco" class="control-label">Valor R$</label>
            </div>
          </div>
          <div class="col-md-2 wow fadeInLeft" data-wow-duration="1.75s">
            <div class="md-form">
              <input id="inputEstoque" type="number" class="form-control" name="estoque_minimo">
              <label for="inputEstoque" class="control-label">Estoque Minimo</label>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 wow fadeInLeft" data-wow-duration="2.25s">
              <div class="md-form">
                <textarea type="text" class="md-textarea" name="descricao"></textarea>
                <label for="inputDescricao" class="col-md-2 control-label">Descrição</label>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="form-inline col-md-10">
              <input id="usado" type="checkbox" name="usado" value="true">
              <label for="usado">Usado</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-1">
            </div>
            <fieldset class="col-md-10">
              <legend>Categoria</legend>
              <select class="browser-default form-control" name="categoria_id" >
                <?php foreach($categorias as $categoria) : ?>
                  <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
                <?php endforeach ?>
              </select>
            </fieldset>
          </div>
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
