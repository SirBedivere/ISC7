<?php
require_once "../Conexion/Conexion.php";
require_once "../Beans/Producto.php";
require_once "../Service/ProductoServicio.php";

$productoBean=$_POST['productoBean'];
?>


<h2>Modificar Producto</h2>


<form method="post" action="../funciones/AltaProducto.php">

	<label>Codigo de barras:</label>
	<input type="text" name="CodigoBarras" value="<?php echo $productoBean->codigoBarra?>"  required class="form-control">
	<label>Nombre Producto</label>
	<input type="text" name="Nombre" required class="form-control">
	<label>Descripci&oacute;n:</label>
	<textarea name="Descripcion"required class="form-control"></textarea>
	<label>Precio</label>
	<input type="text" name="PrecioEnrada" class="from-control"></input>

			
	<input type="submit" value="Alta">
</form>