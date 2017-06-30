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
<div id="modal-dismis"></div>
<div id="modal-encuesta">
	<div class="t-center">
	<p>Aqui va el contenido de la encuesta</p>
	<div class="fa fa-times-circle-o" id="close-modal" style="font-size: 5rem;"></div>
	</div>
</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 t-center">
				<div class="t-center">
					
					<h1 class="acti-title">Completa actividades e incrementa tus ganancias</h1>

					<div class="c-actividades t-center">
						
						<div class="acti-item" id="encuesta1">
							<div class="acti-name back-verde">Encuesta</div>
							<img src="images/news.png" alt="">
							<p class="en-title">Encuesta No.1</p>
							<p class="en-desc">Descripción de una linea</p>
							<p class="en-gana">GANA $10 CRÉDITOS</p>
						</div>
						
						<div class="acti-item acti-app">
							<p class="app-title">PROMO APP</p>
							<p class="app-desc">Regístrate en la App y gana</p>
							<p class="app-gana">$10</p>
							<p class="app-cred">CRÉDITOS</p>
							<a href="#" class="app-promo back-rojo">IR A PROMOCIÓN</a>
						</div>
						
						<div class="acti-item" id="encuesta2">
							<div class="acti-name back-verde">Encuesta</div>
							<img src="images/news.png" alt="">
							<p class="en-title">Encuesta No.1</p>
							<p class="en-desc">Descripción de una linea</p>
							<p class="en-gana">GANA $10 CRÉDITOS</p>
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
	<script>
		$('#encuesta1, #encuesta2').on('click', function(){
			$('#modal-encuesta').fadeIn();
			$('#modal-dismis').show();

		})

		$('#modal-dismis, #close-modal').on('click', function(){
			$('#modal-encuesta, #modal-dismis').fadeOut();
			
		})
	</script>
</body>
</html>