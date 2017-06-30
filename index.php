 <?php $title = 'JustWIN'; ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
  <?php include 'includes/head.php' ?>

</head>

<body class="login-gene">
<?php include 'includes/nav-login.php'; ?>


<div class="container">
	<div class="row content-cen">
		<div class="col-sm-12 col-md-8">
			<div class="index-contain">
				<div class="t-center">
					<img class="coin"  src="images/coin.png">
				</div>

				<h1 class="f-normal index-title">Gana dinero de la forma más fácil con <span class="bold">Just </span><span class="bolder">WIN.</span></h1>
				
				<p class="index-desc">Como su nombre lo dice <span class="bold">Just Win:</span> por registrarte, por llenar tu perfil, por participar en las encuestas que hagamos, por recomendarnos... Por todo y no sólo eso puedes ganar más dinero, regístrate y descúbrelo,<br><span class="bold extra">¡es muy fácil!</span></p>
			</div>			
		</div>
			<div class="col-sm-12 col-md-4">
				<div class="login-contain">
					<form action="">
						<label for="" class="log-labels">USUARIO</label>
						<input type="text" class="log-inp" placeholder="Nombre de usuario">
						<label for="" class="log-labels">CONTRASEÑA</label>
						<input type="password" class="log-inp" placeholder="Contraseña">
						<div class="olvida-pass t-right">
							<a href="#">Olvidé mi contraseña</a>
						</div>
						<div class="t-center">	
							<button type="button" class="inicia-ses" onclick="window.location.href='home.php' ">INICIAR SESIÓN
							</button>
						</div>

						<div class="o-sep">
							<div class="text-sep">O</div>
							<div class="line-sep"></div>
						</div>

						<div class="link-reg t-center">
						<a href="registro.php" class="registro">
							REGISTRARME
						</a>
						</div>


					</form>
				</div>	
			</div>
		</div>

		
</div>

<div class="container-fluid">
	<div class="row funcion">
		<div class="col-md-5 img-monedas">
			<img src="images/monedas.png" alt="">
		</div>
		<div class="col-md-7">
			<div id="como-funciona">
				<h2 class="funciona-head">¿Cómo funciona?</h2>
				<p class="funciona-text">
					Es muy fácil, te registras y ganas $500 sólo por llenar tus datos, si complementas tu perfil también ganas, si respondes encuestas ganas, hasta por abrir tu app ganas pues diariamente tenemos inversiones en diferentes mercados. Y, si quieres incrementar tus ganancias puedes invertir tu dinero de manera segura, realizando una operación, ganando al momento y sin correr riesgos.
					<br><br>
					Al invertir en este nivel, manejamos criptomonedas que a diferencia de la moneda normal cuyo respaldo es el oro, ofrecen un crecimiento seguro dado que se respalda en el mercado digital que es lo que controla su valor y por ello te decimos qué días es seguro invertir y en qué momento no.
				</p>
				<div class="dinamic-but">
					<button type="button" class="ver-mas">VER DETALLES</button>
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