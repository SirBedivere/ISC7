<?php
require_once "../Conexion/Conexion.php";
require_once "../Beans/Producto.php";
require_once "../Service/ProductoServicio.php";

// productos
$productoServicio = new ProductoServicio();
$categoria = isset($_GET['categoria']) ? $_GET['categoria']:"";
if($categoria!=""){
	$productos = $productoServicio->findByCategoria($categoria);
}else{
	$productos = $productoServicio->findAll();
}

?>
<div class="Encabezado">
	<?php include "../Design/navegador.php";?>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
<h1>Lista de Productos</h1>
		<div class="clearfix"></div>


	<h3>Pagina</h3>

<div class="clearfix"></div>
<br><table class="table table-bordered table-hover">
	<thead>

		<th>Imagen</th>
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>Precio Salida</th>
		<th>Categoria</th>
		<th>Disponibles</th>
	
		
	</thead>
	Producto
	<?php foreach($productos as $producto ){ ?>
	<tr>

		<td><?php echo $producto->Imagen; ?></td>
		<td><?php echo $producto->Nombre; ?></td>
		<td><?php echo $producto->Descripcion; ?></td>
		<td><?php echo $producto->PrecioSalida; ?></td>
		<td><?php echo $producto->Categoria; ?></td>
		<td><?php echo $producto->InventarioMinimo; ?></td>
		


		</tr>
	<?php } ?>
</table>
<div class="btn-group pull-right">
<a href='index.php?view=products&limit=10&page=1' class='btn btn-default btn-sm'>1</a> </div>

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
</div>
<div class="Pie">
	<?php include "../Design/Pie.php";?>
</div>
