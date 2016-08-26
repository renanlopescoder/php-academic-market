<?php
  require_once ("header.php");
  require_once ("model/Categoria.php");
  require_once ("CategoriaDAO.php");
  require_once ("AlertaController.php");
?>
<div class="padding-top container">
<div class="row">
  <div class="col-md-12 text-md-center text-lg-center margin-bottom">
    <h2 class="animated fadeInLeft">Lista de Categorias</h2>
  </div>
</div>
<?php mostraAlerta("info"); ?>
<table class="table table-striped table-bordered padding-top animated fadeInUp margin-bottom text-md-center text-lg-center">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Descrição</th>
      <th>Alterar</th>
      <th>Remover</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $categorias = listacategorias($conexao);
      foreach($categorias as $categoria){
    ?>
      <tr>
        <td>
          <?=$categoria->id;?>
        </td>
        <td>
          <?=$categoria->nome;?>
        </td>
        <td>
          <a class="btn btn-primary-outline btn-rounded" href="categoria-form-altera.php?id=<?=$categoria->id?>">Alterar</a>
        </td>
        <td>
          <form class="valign-center" action="categoria-action-remove.php" method="post">
            <input type="hidden" name="id" value="<?=$categoria->id?>">
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
