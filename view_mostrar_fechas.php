<?php
require_once('head.php');
//incluye la clase Libro y CrudLibro
require_once('crud.php');
$crud  = new Crud_Cliente();

//obtiene todos los libros con el método mostrar de la clase crud
$listaRetiro=$crud->obtenerRetiro($_GET['id']);



?>

<header align="center">
<h2>Mostrar Retiros</h2>
</header>

<div class="table-responsive" >


<table class="table" id="example">
	<thead class="thead-dark">
	<tr>
		<th scope="col"> Estado</td>
		<th scope="col"> kilos</th>
		<th scope="col"> fecha</td>
		<th scope="col"> Actualizar</td>
		<th scope="col"> Eliminar</td>
	</tr>
	</thead>
	
	<tbody>
		<?php foreach ($listaRetiro as $retiro) {
			$date1 = new DateTime($retiro["fecha"]);
			$date2 = new DateTime("now");
			$diff = $date1->diff($date2);
			$color = 'VERDE';
			if($diff->days < 5){
				$color = 'ROJO';
			}
		?>
		<tr>
			<td>
			<?php  
				if($color=='VERDE'){
					echo '<font color="#019100">	
					NORMAL <i class="fas fa-exclamation-circle"></i>
					</font>';
				}else{
					echo '<font color="#ff0000">	
					ALERTA <i class="fas fa-exclamation-circle"></i>
					</font>';
				}
			?>


			</td>
			<td><?php echo $retiro["kilos"] ?></td>
			<td><?php echo $retiro["fecha"] ?></td>
			<td align="center"><a href="view_editar_fechas.php?id=<?php echo $retiro["id"]?>&cliente=<?php echo $retiro["fk_cliente"]?>" class="form-control btn-success"><i class="fas fa-edit"></i></a> </td>
			<td align="center"><a href="controlador.php?id=<?php echo $retiro["id"]?>&accion=e_retiro"  onclick="confirm('Seguro que desea eliminar?')"  class="form-control btn-danger"><i class="fas fa-trash-alt"></i></a>   </td>
		</tr>
		<?php }?>
	</tbody>
</table>


</div>

<hr>
<a href="view_ingresar_fechas.php?id=<?php echo $_GET['id']?>" class="form-control btn-sample text-center" >Ingresar Retiro</a>
</div>



<?php require_once('footer.php'); ?>