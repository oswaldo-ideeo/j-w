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
	<div class="row content-cen">
		<div class="col-sm-12 col-md-4">
			<img class="coin img-responsive"  src="images/coin.png">
		</div>
	
		<div class="col-sm-12 col-md-8">
			<h1>Gana dinero de la forma más fácil con JustWIN.</h1>
			<p  class="gana">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
				<a class="registro" href="registro.php">REGISTRARME</a>
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