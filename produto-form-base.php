<div class="row">
<div class="col-md-1"></div>
<div class="col-md-5 wow fadeInLeft" data-wow-duration="1.25s">
  <div class="md-form">
    <input id="inputNome" type="text" class="form-control" name="nome" value="<?=$produto->nome?>">
    <label for="inputNome" class="">Nome do Produto</label>
  </div>
</div>
<div class="col-md-2">
  <div class="md-form">
    <input id="inputQuantidade" type="number" class="form-control" name="quantidade" value="<?=$produto->quantidade?>">
    <label for="inputQuantidade" class="control-label">Quantidade</label>
  </div>
</div>
<div class="col-md-2 wow fadeInLeft" data-wow-duration="1.75s">
  <div class="md-form">
    <input id="inputPreco" type="number" class="form-control" name="preco" value="<?=$produto->preco?>">
    <label for="inputPreco" class="control-label">Valor R$</label>
  </div>
</div>
<div class="col-md-2 wow fadeInLeft" data-wow-duration="1.75s">
  <div class="md-form">
    <input id="inputEstoque" type="number" class="form-control" name="estoque_minimo" value="<?=$produto->estoque_minimo?>">
    <label for="inputEstoque" class="control-label">Estoque Minimo</label>
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10 wow fadeInLeft" data-wow-duration="2.25s">
    <div class="md-form">
      <textarea type="text" class="md-textarea" name="descricao"><?=$produto->descricao?></textarea>
      <label for="inputDescricao" class="col-md-2 control-label">Descrição</label>
    </div>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-1"></div>
  <div class="form-inline col-md-10">
    <input id="usado" type="checkbox" <?=$produto->usado?>name="usado" value="true">
    <label for="usado">Usado</label>
  </div>
</div>
<div class="row">
  <div class="col-md-1">
  </div>
  <fieldset class="col-md-10">
    <legend>Categoria</legend>
    <select class="browser-default form-control" name="categoria_id" >
      <?php foreach($categorias as $categoria) :
        $categoriaAnt = $produto->categoria_id == $categoria->id;
        $selected = $categoriaAnt ? "selected='selected'" : "";
      ?>
        <option value="<?=$categoria->id?>" <?=$selected?>><?=$categoria->nome?></option>
      <?php endforeach ?>
    </select>
  </fieldset>
</div>
