  <?php $title = 'JustWIN'; ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	 <?php include 'includes/head.php' ?>
 </head>

 <body class="login-gene">
 	<?php include 'includes/nav-login.php'; ?>



 	<div class="container">
 		<div class="row" >
 			<div class="col-sm-12 col-md-6">
 				<div class="reg-white segundo-paso">
 					<h1 class="text-center">Registro</h1>
 					<div class="row">
 					<div class="line-dif"></div>	
 						<div class="col-xs-6 t-center">
 							<div class="button-red">
 								<p class="n-one">1</p>
 							</div>
 							
 						</div>
 						<div class="col-xs-6 t-center">
 							<div class="button-yellow">
 								<p class="n-two">2</p>
 							</div>
 						</div>

 						<div class="col-md-12 col-xs-12 reg-text">
 							<p class="reg-text text-center">Necesitamos documentos para acreditar tu registro y con ello tus ganancias.</p>
 						</div>

 						<div class="col-md-12 col-xs-12 profile-pic">
 								<a href="#">
 								<div class="foto-up">
 									<div class="fa fa-user-circle-o"></div>
 									<p>Foto de perfil</p>
 								</div>
 								</a>
 						</div>
					</div>
 					
 					<div class="row paddin-reg">
 						<div class="col-md-6">
 							<p><b>IDENTIFICACIÓN OFICIAL</b></p>
 						</div>

 						<div class="col-md-6">
 							<input class="circle-border" type="text" name="adjunta" placeholder="Adjuntar archivo"><span class="fa fa-paperclip inverse"></span>
 						</div>
 					</div>
					
 					
 					<div class="row paddin-reg paddin-inp">
 						<div class="col-md-6">
 							<p><b>COMPROBANTE DE DOMICILIO</b></p>
 						</div>
 						<div class="col-md-6">
 							<input class="circle-border" type="text" name="adjunta" placeholder="Adjuntar archivo"><span class="fa fa-paperclip inverse"></span>
 						</div>
 					</div>

 					<div class="row terms">
 						<div class="col-md-12">
 							<label class="checkbox-inline"><input class="checkbox-r" type="checkbox" value="">
 								<p class="condiciones">He leido y Acepto los <b class="term">Términos y Condiciones,</b><br>así como la <b class="term">Política Integral del Servicio.</b></p>
 							</label>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-md-12 paddin-buttonenv">
 							<a class="registro" href="home.php">ENVIAR</a>
 						</div>
 					</div>
 	

 				</div>



 				<div class="reg-white primer-paso">
 					<h1 class="text-center">Registro</h1>
 					<div class="row">
 					<div class="line-dif"></div>
 						<div class="col-xs-6 t-center">

 							<div class="button-red">
 								<p class="n-one">1</p>
 							</div>

 						</div>
 						<div class="col-xs-6 t-center">
 							<div class="button-yellow grayd">
 								<p class="n-two">2</p>
 							</div>
 						</div>

 						<div class="col-md-12 col-xs-12 reg-text">
 							<form action="">
 								<label for="name" class="dat">NOMBRE</label>
 								<input type="text" class="dat-in">

 								<label for="" class="dat">APELLIDO</label>
 								<input type="text" class="dat-in">

 								<label for="" class="dat">CORREO ELECTRÓNICO</label>
 								<input type="text" class="dat-in">

 								<label for="" class="dat">CONFIRMAR CORREO ELECTRÓNICO</label>
 								<input type="text" class="dat-in">

 								<label for="" class="dat">ESTABLECER CONTRASEÑA</label>
 								<input type="text" class="dat-in">
 							</form>
 						</div>

 						

 					<div class="row">
 						<div class="col-md-12 paddin-buttonenv">
 							<button type="button" class="registro" id="det-invertir">Continuar</button>
 						</div>
 					</div>
 	

 				</div>
 			</div>

 					
 		</div>
 	</div>


 			<script src="js/jquery.js"></script>
 			<script src="js/bootstrap.min.js"></script>
 			<script>
				$('#open-login').on('click', function(){
					$('#login').slideToggle();
					$('.login-dismis').show();
				})

				$('.login-dismis').on('click', function(){
					$('#login').slideUp();
					$(this).hide();
				})

				
			</script>
			<script>
		$('#det-invertir').on('click', function(){
			$('.segundo-paso').show();
			$('.primer-paso').hide();

		})
	</script>
 		</body>
 		</html>