<?php $title = 'Encuesta'; ?>
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
							<h3 class="text-rojo">Encuesta</h3>
							<tbody>
								<h5 class="t-left">Educación</h5>
								<tr>
									
									<td>
										<div class="not-status s-neutral">
											<img src="images/logo-blanco.png" alt="">
										</div>
									</td>
									<td class="t-left border-l">
										<div>¿Estas registrado como estudiante?</div>
											<form action="">
												<div class="pregunta">
													<input type="radio" name="res"><label for="">Sí</label>
												</div>
												<div class="pregunta">
													<input type="radio" name="res"><label for="">No</label>
												</div>
											</form>
									</td>
									
								</tr>

								<tr>
									
									<td>
										<div class="not-status s-gris">
											<img src="images/logo-blanco.png" alt="">
										</div>
									</td>
									<td class="t-left border-l">
										<div>¿Cuál es el mayor grado escolar que has alcanzado?</div>
											<form action="">
												<div class="pregunta">
													<input type="radio" name="estudio"><label for="">Sí</label>
												</div>
												<div class="pregunta">
													<input type="radio" name="estudio"><label for="">No</label>
												</div>
											</form>
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