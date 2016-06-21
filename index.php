<?php
  require_once ('UsuarioController.php');
  require_once ("header.php");
?>

<div class="row padding-top margin-bottom">

		<div class="col-md-7 col-md-offset-1">
			<h1 class="wow fadeInRight" data-wow-duration="2s">Academic PHP Market</h1>
		</div>

	<div class="col-md-2">
		<a class="btn btn-success-outline waves-effect btn-rounded" href="https://github.com/renanslopes8/back_end-php-MDB-loja"
		 target="_blank">
			Código do Projeto
		</a>
	</div>


<?php
	if (!isset($_SESSION["usuario_logado"])) {
?>


	<div class="col-md-1">
		<button type="button" class="btn btn-primary-outline waves-effect btn-rounded" data-toggle="modal" data-target="#myModal">
			Login
		</button>
	</div>


<?php
	} else {
?>


	<div class="col-md-1">
		<form class="" action="usuario-action-logout.php" method="post">
			<button type="submit" class="btn btn-warning-outline waves-effect btn-rounded">
				Logout
			</button>
		</form>
	</div>


<?php
	};
?>

</div>
<div class="row animated fadeInRight">
	<div id="carousel" class="carousel slide carousel-fade margin-bottom" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-banner-to="0" class="active"></li>
			<li data-target="#carousel" data-banner-to="1"></li>
			<li data-target="#carousel" data-banner-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img src="img/banner3.jpg" alt="First banner">
			</div>
			<div class="carousel-item">
				<img src="img/banner2.jpg" alt="Second banner">
			</div>
			<div class="carousel-item">
				<img src="img/banner1.jpg" alt="Third banner">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
			<span class="icon-prev" aria-hidden="true"></span>
			<span class="sr-only">Voltar</span>
		</a>
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			<span class="icon-next" aria-hidden="true"></span>
			<span class="sr-only">Avançar</span>
		</a>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header card-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h2 class="text-md-center">Login</h2>
			</div>
			<form action="usuario-action-login.php" method="post" class="col-md-12 card z-depth-2">
				<div class="card-block text-left">
					<div class="row">
						<div class="col-md-12">
							<div class="md-form">
								<label for="email">E-mail</label>
								<input id="email" class="form-control" type="text" name="email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="md-form">
								<label for="senha">Senha</label>
								<input id="senha" class="form-control" type="password" name="senha">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group text-md-center">
								<button class="btn btn-primary" type="submit" name="button">Entrar</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php require_once("sobre.php"); ?>


<?php require_once("footer.php"); ?>
