<?php
require_once('head.php');
//incluye la clase Libro y CrudLibro
require_once('crud.php');

$crud  = new Crud_Cliente();

//obtiene todos los libros con el método mostrar de la clase crud
$cliente = $crud->obtenerCliente($_GET['id']);

?>



<header align="center">
<h2>Ingresar Retiros</h2>
</header>
<form action='controlador.php' method='post'>
    <table class="table">
	<input type='text' name='id' value="<?php echo $cliente["id"]?>" hidden >
		<tr>
			<td>Nombre Cliente:</td>
			<td> <input type='text' name='nombre' readonly value='<?php echo $cliente["nombre"] ?>'></td>
		</tr>
		<tr>
			<td>Kilos:</td>
			<td><input type='text' name='kilos' ></td>
		</tr>
		<tr>
			<td>Fecha:</td>
			<td><input type='date' name='fecha' ></td>
		</tr>
	</table>
	<input type='hidden' name='nombre' readonly value='<?php echo $cliente["nombre"] ?>'>
	<input type='submit' value='Guardar' name="guardarRetiro" class="form-control btn-sample">
	<a href="index.php">Volver</a>
</form>
</div>

<?php require_once('footer.php'); ?>