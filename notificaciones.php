<?php $title = 'Notificaciones'; ?>
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
							
						</div>
					</div>

					<div class="c-secundario espacio">
						<table class="table table-responsive table-condensed">
							<h3 class="text-rojo">Notificaciones</h3>
							<tbody>
								<tr>
									<td>
										<div class="not-status s-go">
											<img src="images/logo-blanco.png" alt="">
										</div>
									</td>
									<td class="t-left border-l">
										<div class="not-title">¡ES MOMENTO DE INVERTIR!</div>
										<div class="not-desc">Aprovecha la alza en el porcentaje del mercado para realizar inversiones.</div>
										<div class="not-time">Hace 2horas</div>
									</td>
									<td>
										<div class="fa fa-times-circle-o" style="font-size: 20px;"></div>
									</td>
								</tr>

								<tr>
									<td>
										<div class="not-status s-stop">
											<img src="images/logo-blanco.png" alt="">
										</div>
									</td>
									<td class="t-left border-l">
										<div class="not-title">¡A VECES HAY QUE ESPERAR!</div>
										<div class="not-desc">En este momento hemos identificado que no es buen momento para invertir.</div>
										<div class="not-time">Hace 25min</div>
									</td>
									<td>
										<div class="fa fa-times-circle-o" style="font-size: 20px;"></div>
									</td>
								</tr>

								<tr>
									<td>
										<div class="not-status s-neutral">
											<img src="images/logo-blanco.png" alt="">
										</div>
									</td>
									<td class="t-left border-l">
										<div class="not-title">¡ABONO EXITOSO!</div>
										<div class="not-desc">Se han abonado tus ganancias a tu cuenta.</div>
										<div class="not-time">Hace 25min</div>
									</td>
									<td>
										<div class="fa fa-times-circle-o" style="font-size: 20px;"></div>
									</td>
								</tr>

								<tr>
									<td>
										<div class="not-status s-go">
											<img src="images/logo-blanco.png" alt="">
										</div>
									</td>
									<td class="t-left border-l">
										<div class="not-title">¡YA PUEDES RETIRAR TUS GANANCIAS!</div>
										<div class="not-desc">Has alcanzado el saldo permitido para convertir tus ganancias en capital real.</div>
										<div class="not-time">Hace 25min</div>
									</td>
									<td>
										<div class="fa fa-times-circle-o" style="font-size: 20px;"></div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					
				</div>
			</div>
		</div>
	</div>


	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>

</body>
</html>