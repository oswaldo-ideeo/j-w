<?php $title = 'Home'; ?>
<?php $inicio = 'menu-active'; ?>
<?php $actividades = 'no-active'; ?>
<?php $nivel = 'no-active'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'includes/head.php' ?>
</head>
<body  class="back-general">

<!--nav-->
	<?php include 'includes/nav.php' ?>
<!--nav fin-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 t-center">
				<div class="contenido-home t-center">
					<img src="images/logo-verde-sombra.png" alt="">
					<h1>¡Este es buen momento para  ganar!</h1>

					<div class="c-secundario">
						<div class="con-sec sec-text">
							<h2>Incrementa tus ganancias</h2>
							<p>Completa las tareas disponibles en la sección de Actividades y obtén más dinero en tu cuenta.</p>
						</div>	
						<div class="con-sec sec-boton">
							<a href="ctividades.php" class="boton-home">GANAR MÁS</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</body>
</html>