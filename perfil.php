<?php $title = 'Perfil'; ?>
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
					
					<div class="c-secundario">
						<div class="con-sec sec-text t-left">

							<div class="perfil-f">
								<img src="images/user-example.png" alt="">
							</div>
							<div class="perfil-info">
								<p class="p-name">Alex Robinson</p>
								<p class="p-mail">jace_mcclure@yahoo.com</p>
								<p class="p-editar"><span class="fa fa-pencil"></span><a href="#">Editar Perfil</a></p>
							</div>
						</div>	
						<div class="con-sec sec-boton">
							<a href="upgrade.php" class="boton-home red2">UPGRADE</a>
						</div>
					</div>

					<div class="perfil-sec">
						<div class="p-datos saldo">
							<img src="images/logo-amarillo-sombra.png" alt="">
							<p class="saldo-text">Tu saldo es:</p>
							<p class="saldo-cantidad">$200.00</p>
						</div>
						<div class="p-datos p-grafica back-amarillo">
							
							<p><span class="fa fa-bar-chart"></span>Comportamiento del mercado</p>
							<div class="ct-chart"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/chartist.js"></script>
	<script>
		new Chartist.Line('.ct-chart', {
  			labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
  			series: [
    			[100, 150, 350, 280, 400]
  			]
		}, {
  			fullWidth: true,
  			chartPadding: {
    		right: 40
  			}
		});
	</script>
</body>
</html>