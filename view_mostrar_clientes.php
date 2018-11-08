<?php
require_once('head.php');
//incluye la clase Libro y CrudLibro
require_once('crud.php');

$crud  = new Crud_Cliente();

//obtiene todos los libros con el método mostrar de la clase crud
$listaCliente=$crud->mostrar();
?>


<header align="center">
<h2>Mostrar Clientes</h2>
</header>
	<table class="table display" id="example">
        <thead class="thead-dark">
        <tr>
			<th scope="col"> ID  </th>
            <th scope="col"> Nombre  </th>
			<th scope="col"> Ver Retiros   </th>
			<th scope="col"> Ver Reporte</td>
			<th scope="col"> Actualizar</td>
			<th scope="col"> Eliminar</td>
        </tr>
        </thead>
		
		<tbody>
			<?php foreach ($listaCliente as $cliente) {?>
			<tr>
				<td><?php echo $cliente["id"] ?></td>
				<td><?php echo $cliente["nombre"] ?></td>
				<td align="center"><a href="view_mostrar_fechas.php?id=<?php echo $cliente["id"]?>&accion=a" class="form-control btn-primary"><i class="fas fa-people-carry"></i></a> </td>
				<td align="center"><a href="view_mostrar_reporte.php?id=<?php echo $cliente["id"]?>" class="form-control btn-warning"><i class="fas fa-file-invoice"></i></a> </td>
				<td align="center"><a href="view_editar_clientes.php?id=<?php echo $cliente["id"]?>&accion=a" class="form-control btn-success"><i class="fas fa-edit"></i></a> </td>
				<td align="center"><a href="controlador.php?id=<?php echo $cliente["id"]?>&accion=eliminar" onclick="confirm('Seguro que desea eliminar?')"  class="form-control btn-danger"><i class="fas fa-trash-alt"></i></a>   </td>
			</tr>
			<?php }?>
		</tbody>
	</table>
	<a href="index.php">Volver</a>
</div> 


 

<?php require_once('footer.php'); ?>