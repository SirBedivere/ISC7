
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
	
		<script src="jquery-2.1.4.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css"></link>
		<link rel="stylesheet" href="css/bootstrap-theme.min.css"></link>		
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet"  type="text/css" href="css/main.css"></link>
		
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="main.js"></script>
</head>
<body>


<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Logotipo de la tienda</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
	   
	   
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="catalogoProductos.php">Productos</a></li>
      <li><a href="#">Informacion</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Categoria <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#"> Electronicos </a></li>
          <li><a href="#">Juegos xbox</a></li>
          <li><a href="#">Ropa Men</a></li>
          <li class="divider"></li>
          <li><a href="#">Computadoras</a></li>
          <li class="divider"></li>
          <li><a href="#">Laptop</a></li>
        </ul>
      </li>
    </ul>
    
	<div class="col-lg-6" align ="center">
    <div class="input-group">
      <input type="text" class="form-control" size="100px" >
      <span class="input-group-btn">
        <button class="btn btn-default " type="submit" required name="buscar" 
		>Buscar</button>
      </span>
    </div>
  </div>
  
    <ul class="nav navbar-nav navbar-right">
     
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Menú  <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Registrarse</a></li>
          <li><a href="#">Carrito </a></li>
          <li><a href="#">Comprar</a></li>
          <li class="divider"></li>
          <li><a href="#">Forma de pago</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
	
</body>
</html>

<?php include('catalogoProductos.php');?>

