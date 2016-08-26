<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Academic PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css" charset="utf-8">
    <link rel="stylesheet" href="css/mdb.css" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <?php
      require_once ('UsuarioController.php');
      require_once ('AlertaController.php');
    ?>
    <?php
      error_reporting(E_ALL ^ E_NOTICE);
    ?>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark unique-color-dark">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
            <i class="fa fa-bars"></i>
        </button>
        <div class="container-fluid">
          <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
            <ul class="nav navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Produtos</a>
                  <div class="dropdown-menu">
                    <a href="produto-form-adiciona.php" class="dropdown-item">Adiciona Produto</a>
                    <a href="produto-listar.php" class="dropdown-item">Lista Produtos</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Categorias</a>
                  <div class="dropdown-menu">
                    <a href="categoria-form-adiciona.php" class="dropdown-item">Adiciona Categoria</a>
                    <a href="categoria-listar.php" class="dropdown-item">Lista Categoria</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contato-form-email.php">Contato</a>
              </li>
              <li>
                <div class="col-md-5">
                  <?php
                    mostraAlertaNav("success");
                    mostraAlertaNav("danger");
                  ?>
                  <?php
                    if(isset($_SESSION['usuario_logado'])){
                  ?>
                      <li class="nav-item">
                        <a href="#" class="white-text nav-link">Olá, <?=$_SESSION['usuario_logado']?></a>
                      </li>
                  <?php
                    };
                  ?>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container-fluid">
