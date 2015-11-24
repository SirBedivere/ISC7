<?php
require_once "../Conexion/Conexion.php";
require_once "../Beans/Producto.php";
require_once "../Service/ProductoServicio.php";
require_once "../Beans/Categoria.php";
require_once "../Service/CategoriaServicio.php";


?>
<div class="Encabezado">
	<?php include "../Design/navegadorAdmin.php";?>
</div>		

<h2>Agregar Producto</h2>


<form method="post" action="../funciones/AltaProducto.php">
	<div class="container">

		<label>Nombre Producto</label>
		<input type="text" name="Nombre" required class="form-control">
		<label>Descripci&oacute;n:</label>
		<textarea name="Descripcion"required class="form-control"></textarea>
		<label>Inventario Minimo</label>
		<input type="text" name="InventarioMin" class="form-control"></input>
		<label>Precio de entrada</label>
		<input type="text" name="PrecioEntrada" class="form-control"></input>
		<label>Precio Salida</label>
		<input type="text" name="PrecioSalida" class="form-control"></input>
		<label>Categor&iacute;as</label>
		<select name="categoriaId"  required class="form-control">
		<?php
			// mostrar categorías
			$categoria = new Categoria();
			$categoriaServicio = new CategoriaServicio();
			foreach($categoriaServicio->findAll() as $categoriaTabla) {
				echo "<option value='" . $categoriaTabla->Id . "'>" . $categoriaTabla->Nombre . "</option>";
			}
		?>
	</select>
		<label>Fecha</label>
		<input type="text" name="FechaCreacion" class="form-control"></input>	
		<input type="submit" value="Alta">
	</div>	
</form>
<div class="Pie">
	<?php include "../Design/Pie.php";?>
</div>
			




