 <!DOCTYPE html>
 <html>
 <head>
 	<title>Just Win</title>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="css/bootstrap.min.css" rel="stylesheet">
 	<link href="css/style-jor.css" rel="stylesheet">
 </head>

 <body class="login">
 	<?php include 'includes/nav-login.php'; ?>

 	<div class="container">
 		<div class="row">
 			<div class="col-sm-12 col-md-6">
 				<div class="color-white">
 					<h1 class="text-center">Registro</h1>
 					<div class="row">	
 						<div class="col-md-6 button-red">
 							<p class="n-one">1</p>
 						</div>
 						<div class="col-md-6 button-yellow">
 							<p class="n-two">2</p>
 						</div>

 						<div class="col-md-12 reg-text">
 							<p class="reg-text text-center">Necesitamos documentos para acreditar tu registro y con
 								ello tus ganancias.</p>
 							</div>

 							<div class="col-md-12 profile-pic">
 								<a href="#"><img src="images/foto-perfil.png"></a>
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
 							<div class="row">
 								<div class="col-md-12 padin-checkbox">
 									<label class="checkbox-inline"><input class="checkbox-r" type="checkbox" value="">
 										<p class="condiciones">He leido y Acepto los <b class="term">Términos y Condiciones,</b><br>
 											así como la <b class="term">Política Integral del Servicio.</b></p>
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

 					<div class="col-sm-12 col-md-4">
 						<div class="color-white">
 							<div class="row">	
 								<div class="row paddin-reg">
 									<div class="col-md-12">
 										<p><b>USUARIO</b></p>
 									</div>
 									<div class="col-md-12">
 										<input class="circle-border2" type="text" name="adjunta" placeholder="Nombre de usuario">
 									</div>
 								</div>

 								<div class="row paddin-reg paddin-inp">
 									<div class="col-md-12">
 										<p><b>CONTRASEÑA</b></p>
 									</div>
 									<div class="col-md-12">
 										<input class="circle-border2" type="text" name="adjunta" placeholder="Contraseña">
 									</div>
 								</div>
 								<div class="row">
 									<div class="col-md-12 olv-cont">
 										<a href="#"><p class="condiciones"><b class="term">Olvide mi contraseña</b></p></a>
 									</div>
 								</div>

 								<div class="row">
 									<div class="col-md-12 paddin-buttonenv">
 										<a class="registro" href="home.php">INICIAR SESIÓN</a>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>


 			<script src="js/jquery.js"></script>
 			<script src="js/bootstrap.min.js"></script>
 		</body>
 		</html>