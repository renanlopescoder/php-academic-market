<?php
  require_once ("header.php");
  require_once ("AlertaController.php");
?>
<div class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="wow zoomInDown" data-wow-duration=".25s">Formulário</h1>
        <h1 class="wow zoomInDown" data-wow-duration=".5s">Contato</h1>
        <br>
        <p class="wow zoomInDown 1s">
          Envie uma sugestão ou comentário sobre o projeto, suas críticas ou sugestões serão bem vindas
        </p>
      </div>
    </div>
    <?php if (!isset($_SESSION['info'])) { ?>
    <form class="form-horizontal" action="contato-action-email.php" method="POST">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5 wow zoomInDown" data-wow-duration="1.25s">
          <div class="md-form">
            <input id="inputNome" type="text" class="form-control" name="nome">
            <label for="inputNome" class="">Nome</label>
          </div>
        </div>
        <div class="col-md-5 wow zoomInDown" data-wow-duration="1.50s">
          <div class="md-form">
            <input id="inputEmail" type="email" class="form-control" name="email">
            <label for="inputEmail" class="control-label">E-Mail</label>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 wow zoomInDown" data-wow-duration="1.75s">
          <div class="md-form">
            <textarea id="inputMensagem" type="text" class="md-textarea" name="mensagem"></textarea>
            <label for="inputMensagem" class="col-md-2 control-label">Mensagem</label>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
      <div class="row">
        <div class="form-group">
          <div class="col-md-4 col-md-offset-1">
            <button class="btn btn-default btn-rounded wow zoomInDown" data-wow-duration="2s" onClick="history.go(-1)">Voltar</button>
            <button type="submit" class="btn btn-primary btn-rounded wow zoomInDown" data-wow-duration="2.25s">Enviar</button>
          </div>
        </div>
      </div>
    </form>
    <?php } else { ?>
      <?=$_SESSION['info']?>
    <?php }
      unset($_SESSION['info']);
    ?>

  <?php require_once('footer.php'); ?>
