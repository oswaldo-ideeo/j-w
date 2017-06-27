  <?php $title = 'JustWIN'; ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	 <?php include 'includes/head.php' ?>
 </head>

 <body class="login-gene">
 	<?php include 'includes/nav-login.php'; ?>

<!--login-->
	<?php include 'includes/login.php'; ?>
<!--loginfin-->


 	<div class="container">
 		<div class="row" >
 			<div class="col-sm-12 col-md-6">
 				<div class="reg-white">
 					<h1 class="text-center">Registro</h1>
 					<div class="row">	
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
 								<a href="#"><img src="images/foto-perfil.png"></a>
 						</div>
					</div>
 					
 					<div class="row paddin-reg">
 						<div class="col-md-6">
 							<p><b>IDENTIFICACIÓN OFICIAL</b></p>
 						</div>

 						<div class="col-md-6">
 							<input class="circle-border" type="text" name="adjunta" placeholder="Adjuntar archivo">
 						</div>
 					</div>
					
 					
 					<div class="row paddin-reg paddin-inp">
 						<div class="col-md-6">
 							<p><b>COMPROBANTE DE DOMICILIO</b></p>
 						</div>
 						<div class="col-md-6">
 							<input class="circle-border" type="text" name="adjunta" placeholder="Adjuntar archivo">
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
 							<a class="registro" href="registro.php">ENVIAR</a>
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
 		</body>
 		</html>