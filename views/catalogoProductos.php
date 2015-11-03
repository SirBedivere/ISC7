
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />	

    <link href="bootstrap2/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap2/css/bootstrap-responsive.min.css" rel="stylesheet">
    <script src="bootstrap2/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<div class="row">
	<div class="col-md-12">
<div class="btn-group  pull-right">
	<a href="index.php?view=newproduct" class="btn btn-default">Agregar Producto</a>
<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="">(.docx)</a></li>
  </ul>
</div>
</div>
		<h1>Lista de Productos</h1>
		<div class="clearfix"></div>


	<h3>Pagina</h3>

<div class="clearfix"></div>
<br><table class="table table-bordered table-hover">
	<thead>
		<th>Codigo</th>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Precio Entrada</th>
		<th>Precio Salida</th>
		<th>Categoria</th>
		<th>Minima</th>
		<th>Activo</th>
		<th></th>
	</thead>
	Producto
	<tr>
		<td>Id Producto</td>
		<td>
			Imagen de producto
				<img src="carro.jpg" style="width:64px;">
			
		</td>
		<td>Nombre producto</td>
		<td>Precio de entrada></td>
		<td>Precio Salida</td>
		<td>Categoria</td>
		<td>Inventario Minimo</td>
		<td>Activo</td>
		

		
	</tr>
	
</table>
<div class="btn-group pull-right">

</div>
<form class="form-inline">
	<label for="limit">Limite</label>
	<input type="hidden" name="view" value="products">
	<input type="number" value="numeros" name="limit" style="width:60px;" class="form-control">
</form>

<div class="clearfix"></div>

	
	<div class="jumbotron">
		<h2>No hay productos</h2>
		<p>No se han agregado productos a la base de datos, puedes agregar uno dando click en el boton <b>"Agregar Producto"</b>.</p>
	</div>
	
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>
</body>
</html>