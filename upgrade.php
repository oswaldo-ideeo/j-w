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
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="color-white2">
					<div class="row">
						<div class="col-md-12">
							<h3 class="conv-upgrade">Conviertete en usuario nivel 2</h3>
						</div>
						<div class="col-md-12 cent">
							<div class="col-md-2">
								<img class="upgrade" src="images/foto-perfil.png">
							</div>
							<div class="col-md-2 necesitams">
								<p>Necesitamos una fotografía para acreditar la titularidad de la Tarjeta.
									<b class="term">Ver ejemplo.</b></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="numt-up">NÚMERO DE LA TARJETA</p>
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
										<p>FECHA DE EXPIRACIÓN</p>
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

								<div class="row">
									<div class="col-md-12 padin-checkbox">
										<label class="checkbox-inline"><input class="checkbox-r" type="checkbox" value="">
											<p class="condiciones">He leido y Acepto los <b class="term">Términos y Condiciones,</b><br>
												así como la <b class="term">Política Integral del Servicio.</b></p>
											</label>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12 paddin-buttonenv2">
											<a class="registro" href="registro.php">ENVIAR</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>