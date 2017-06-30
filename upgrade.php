<?php $title = 'Actividades'; ?>
<?php $inicio = 'no-active'; ?>
<?php $actividades = 'menu-active'; ?>
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
					
					<div class="c-secundario2">
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
							<a href="actividades.php" class="boton-home red2">GANAR MÁS</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<div class="color-white2">
					<div class="row">
						<div class="col-md-12">
							<h3 class="conv-upgrade">Conviertete en usuario nivel 2.</h3>
						</div>
						<div class="col-md-12 cent">
							<div class="col-md-2">
								<a href="#">
 								<div class="foto-up">
 									<div class="fa fa-user-circle-o"></div>
 									<p>Foto de perfil</p>
 								</div>
 								</a>
							</div>
							<div class="col-md-2 necesitams">
								<p>Necesitamos una fotografía para acreditar la titularidad de la Tarjeta.
									<b class="term">Ver ejemplo.</b></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 t-center">
								<p class="hope" style="font-weight: 500;">NÚMERO DE LA TARJETA</p>
								<input class="input-upgrade" type="text" placeholder="16 digitos de la tarjeta" name="">
							</div>

							<div class="container">
								<div class="row">
									<div class="col-md-6 cards-upgrade">
										<div class="col-xs-1 col-md-1"><img src="images/visa.png"></div>
										<div class="col-xs-1 col-md-1"><img src="images/mastercard.png"></div>
										<div class="col-xs-1 col-md-1"><img src="images/american.png"></div>
										<div class="col-xs-1 col-md-1"><img src="images/bva.png"></div>
									</div>
								</div>
							</div>

							<div class="container">
								<div class="row">
									<div class="col-md-6 cards-upgrade">
										<p style="font-weight: 500;">FECHA DE EXPIRACIÓN</p>
									</div>
								</div>
							</div>

							<div class="container">
								<div class="row">
									<div class="col-md-6 col-lg-9  cards-upgrade-second">
										<div class="col-xs-1 col-md-1 float"><input class="input-card" type="text" placeholder="MM" name=""></div>
										<div class="col-xs-1 col-md-1 float"><input class="input-card" type="text" placeholder="YY" name=""></div>
										<div class="col-xs-1 col-md-1 float"><p class="text-cvv"><b>CVV</b></p></div>
										<div class="col-xs-1 col-md-1 float"><input class="input-card" type="text" placeholder="MM" name=""></div>
										<div class="col-xs-1 col-md-1 float"><img src="images/question.png"></div>
									</div>
								</div>

								<div class="row t-center">
									<div class="col-md-12 terms2">
									<input class="checkbox-r" type="checkbox" value="">
										<label class="checkbox-inline">
											<p class="condiciones">He leido y Acepto los <b class="term">Términos y Condiciones,</b><br>
												así como la <b class="term">Política Integral del Servicio.</b></p>
											</label>

										</div>
									</div>

									<div class="row">
										<div class="col-md-12 paddin-buttonenv2">
											<a class="registro" href="perfil-n2.php">ENVIAR</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script>
			$('#open-user').on('click', function(){
				$('.menu-nav').slideToggle();
				$('.close-nav').show();
			})
			$('.close-nav').on('click', function(){
				$('.menu-nav').slideUp();
				$(this).hide();
			})
		</script>
		</body>
		</html>