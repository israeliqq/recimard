<?php
require_once('head.php');
//incluye la clase Libro y CrudLibro
require_once('crud.php');

$crud  = new Crud_Cliente();

//obtiene todos los libros con el método mostrar de la clase crud
$cliente=$crud->obtenerCliente($_GET['cliente']);
$retiro=$crud->obtenerRetiroCliente($_GET['id'],$_GET['cliente']);

?>


<hr>
<h4 class="mb-3">Datos Cliente</h4>
<form action='controlador.php' method='post'>

	<input type='text' name='id' hidden value='<?php echo $cliente["id"] ?>'>
	<input type='text' name='fk_retiro' hidden value='<?php echo $retiro["id"] ?>'>
    <table class="table">
		<tr>
			<td>Nombre Cliente:</td>
			<td> <input type='text' class="form-control" name='nombre' readonly value='<?php echo $cliente["nombre"] ?>'></td>
		</tr>
		<tr>
			<td>Kilos:</td>
			<td><input type='text' class="form-control" name='kilos' value='<?php echo $retiro["kilos"] ?>'></td>
		</tr>
		<tr>
			<td>Fecha:</td>
			<td><input type='date' class="form-control" name='fecha' value='<?php echo $retiro["fecha"] ?>'></td>
		</tr>
		<input type='hidden' name='actualizarRetiro' value='actualizarRetiro'>
	</table>
	<input type='submit' class="form-control btn-sample" value='Actualizar' name='actualizarRetiro' value='actualizarRetiro'>
</form>

</div>

<?php require_once('footer.php'); ?>