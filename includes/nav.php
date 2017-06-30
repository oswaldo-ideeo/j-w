<div class="container-fluid">
		<div class="row" class="nav2">
			<div class="col-sm-3 navegador">
				<div class="logo-container">
					<a href="home.php">
						<img src="images/logo-min.png" alt="">
						<span><b>JustWIN</b></span>
					</a>
				</div>
			</div>
			<div class="col-sm-6 navegador menu">
				<ul class="text-azul">
					<a href="home.php"><li class="menu-item <?= $inicio ?>">INICIO</li></a>
					<a href="actividades.php"><li class="menu-item <?= $actividades ?>">ACTIVIDADES</li></a>
					<a href="niveles.php"><li class="menu-item <?= $niveles ?>">NIVELES</li></a>
				</ul>
			</div>
			<div class="col-sm-3 navegador t-right on-xs">
				<a href="notificaciones.php"><div class="fa fa-bell-o usuario alin bell-medium"></div></a>
				
				<div class="saldo-nav">
					<p class="saldo-ret small-text">Tu saldo es:</p>
					<p class="saldo-cant small-bold">$200.00</p>
				</div>
				<div class="log-retirar d-inline img-vsmall">
					<img src="images/logo-amarillo-sombra.png" alt="">
				</div>

				<div class="f-usuario usuario"><img src="images/user-example.png" alt=""></div>
				<div class="fa fa-chevron-down usuario alin" id="open-user"></div>
				<div class="menu-nav">
					<a href="perfil.php"><p>Mi perfil <span class="fa fa-user-o"></span></p></a>
					<a href="index.php"><p>Cerrar sesión <span class="fa fa-sign-out"></span></p></a>
				</div>
			</div>
		</div>
	</div>

	<div class="close-nav"></div>