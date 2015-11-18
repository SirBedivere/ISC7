
<nav class="navbar navbar-inverse container">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <a class="navbar-header" href="http://localhost/jorge/index.php">
			<img class="Logo" src="../Css/logo.jpg" width="100%" height="100%" >
		  </a>
		</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
				<button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#myModal">Sign in</button>
						<?php include "Modal.php";?>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
						<button type="submit" class="btn btn-default">Buscar</button>
				</form>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Electrónica, Audio y Video<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="http://localhost/jorge/views/altaProducto.php">Adaptadores</a></li>
					<li><a href="#">Antenas </a></li>
					<li><a href="#">Cables</a></li>							
					<li><a href="#">Conectores </a></li>							
					<li><a href="#">Lentes 3D</a></li>
				</ul>
				</li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consolas y Videojuegos<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="http://localhost/jorge/views/altaProducto.php">Accesorios</a></li>
					<li><a href="#">Juegos Xbox 360</a></li>
					<li><a href="#">Juegos Xbox One</a></li>							
					<li><a href="#">Juegos PS3</a></li>							
					<li><a href="#">Juegos PS4</a></li>
				</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Computación<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://localhost/jorge/views/altaProducto.php">Audífonos</a></li>
							<li><a href="#">Bocinas para PC</a></li>
							<li><a href="#">Cables y conectores</a></li>							
							<li><a href="#">Cargadores para Laptops</a></li>							
							<li><a href="#">Lámpara USB</a></li>
						</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Software <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="http://localhost/jorge/views/altaProducto.php">Windows</a></li>
						<li><a href="#">Office</a></li>
						<li><a href="#">Antivirus</a></li>
						<li><a href="#">Edición</a></li>
						<li><a href="#">Optimización</a></li>

					</ul>
				</li>
			</ul>
			
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
