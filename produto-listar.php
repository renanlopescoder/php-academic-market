<?php
  require_once ("header.php");
  require_once ("connection.php");
  require_once ("ProdutoDAO.php");
?>
<div class="padding-top">
<div class="row">
  <div class="col-md-offset-5 col-md-push-5">
    <h2 class="animated fadeInUp margin-bottom">Lista de Produtos</h2>
  </div>
</div>
<?php
  if (isset($_SESSION["success"])) {
?>
<div>
  <div class="row text-md-center">
    <p class="text-success"><?=$_SESSION['success']?></p>
  </div>
</div>
<?php
    unset($_SESSION["success"]);
  };
?>
<table class="table table-striped table-bordered padding-top animated fadeInUp margin-bottom">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Produto</th>
      <th>Descrição</th>
      <th>Quantidade</th>
      <th>Estoque Mínimo</th>
      <th>Usado</th>
      <th>Preço</th>
      <th>Categoria</th>
      <th>Alterar</th>
      <th>Remover</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $produtos = listaProdutos($conexao);
      foreach($produtos as $produto){
    ?>
      <?php
        $produto['quantidade'] < $produto['estoque_minimo'] ? $status = 'table-danger' : '';
        $produto['quantidade'] == $produto['estoque_minimo'] ? $status = 'table-warning' : '';
      ?>
      <tr class="<?=$status?>">
        <td>
          <?=$produto['id'];?>
        </td>
        <td>
          <?=$produto['nome'];?>
        </td>
        <td>
          <?=substr($produto['descricao'],0 , 40);?>
        </td>
        <td class="text-md-center">
          <?=$produto['quantidade'];?>
        </td>
        <td class="text-md-center">
          <?=$produto['estoque_minimo'];?>
        </td>
        <td>
          <?php
            $produto['usado'] == 1 ? $usado = 'Usado' : '';
            $produto['usado'] == 0 ? $usado = 'Novo' : '';
          ?>
          <?=$usado?>
        </td>
        <td>
          R$ <?=$produto['preco'];?>
        </td>
        <td>
          <?=$produto['categoria'];?>
        </td>
        <td>
          <a class="btn btn-primary-outline btn-rounded" href="produto-form-altera.php?id=<?=$produto['id']?>">Alterar</a>
        </td>
        <td>
          <form class="valign-center" action="produto-action-remove.php" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>">
            <button class="btn btn-danger-outline btn-rounded">Remover</button>
          </form>
        </td>
      </tr>
    <?php
      };
    ?>
  </tbody>
</table>
<?php require_once ("footer.php");?>
