
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							  <a class="navbar-brand" href="http://localhost/jorge/index.php">
								<img class="Logo" src="../Css/logo.jpg" width="100%" height="100%" >
							  </a>
						</div>
					</div>
				</nav>
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
				<li><a href="http://localhost/jorge/views/catalogoProductos.php">Ver Productos</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Producto <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://localhost/jorge/views/altaProducto.php">Agregar Producto</a></li>
							<li><a href="#">Eliminar Producto</a></li>
							<li><a href="#">Editar Producto</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="http://localhost/jorge/views/altaProducto.php">Agregar Categoria</a></li>
						<li><a href="#">Eliminar Categoria</a></li>
						<li><a href="#">Editar Categoria</a></li>
						<li><a href="#">Ver Categoria</a></li>

					</ul>
				</li>
			</ul>
			
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
