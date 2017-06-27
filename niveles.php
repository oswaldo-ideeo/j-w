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
				<div class="t-center">
					<h1 class="acti-title">Completa actividades e incrementa tus ganancias</h1>
				</div>
			</div>
		</div>
</div>

<div class="container">
<div class="row">
	<div class="col-md-6">
		<div class="red">
			<h3 class="nv-uno">Nivel 1</h3>
			<p class="prop">Proporcionanos algunos de tus
				documentos y comienza
				a generar ganancias sin invertir
				dinero de tu bolsa</p>
				<p class="estas-nivel">ESTAS EN ESTE NIVEL</p>

			</div>

		</div>

   <div class="col-md-6">
   	<div class="yellow">
   		<h3 class="nv-uno">Nivel 2</h3>
   		<p class="prop">Genera una mayor cantidad
   			de ingresos invirtiendo.
   			Nosotros te informaremos
   			cuándo es el mejor momento
   			para realizar una inversión.</p>
   			<div class="buton-subir">
   				<a class="subir-n" href="upgrade.php">SUBIR DE NIVEL</a>
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