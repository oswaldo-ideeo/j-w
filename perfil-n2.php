<?php $title = 'Perfil nivel 2'; ?>
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
						<div class="con-sec sec-boton b-nivel2">
							<div class="n2ret">
								<p class="saldo-ret">Tu saldo es:</p>
								<p class="saldo-cant">$200.00</p>
							</div>
							<div class="log-retirar d-inline">
								<img src="images/logo-amarillo-sombra.png" alt="">
							</div>
							<a href="#" class="boton-home red2">RETIRAR</a>
						</div>
					</div>

					<div class="perfil-sec">
						<div class="p-datos saldon2">
							<img src="images/logo-amarillo-sombra.png" alt="" class="d-inline">
							<p class="n2-ingresa d-inline">Ingresa el monto que deseas invertir</p>
							<form action="">
								<div class="in-monto">
									<span>$</span><input type="number" class="monto" placeholder="1,000.00">
								</div>
								<button type="submit" class="invertir back-azul">INVERTIR</button>
							</form>
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