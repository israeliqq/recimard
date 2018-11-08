<?php
//incluye la clase Libro y CrudLibro
require_once('crud.php');

$crud= new Crud_Cliente();

	if (isset($_POST['insertar'])) {

		$nombre     = $_POST['nombre'];
		$telefono   = $_POST['telefono'];
		$correo     = $_POST['correo'];
		$ciudad     = $_POST['ciudad'];
		$direccion  = $_POST['direccion'];
		$t1        	= $_POST['t1'];
		$t2        	= $_POST['t2'];
		$t3        	= $_POST['t3'];
		$crud->insertar($nombre, $telefono, $correo, $ciudad, $direccion, $t1, $t2, $t3);
		header('Location: view_mostrar_clientes.php');

	}elseif(isset($_POST['actualizar'])){

		$id 		= $_POST['id'];
		$nombre     = $_POST['nombre'];
		$telefono   = $_POST['telefono'];
		$correo     = $_POST['correo'];
		$ciudad     = $_POST['ciudad'];
		$direccion  = $_POST['direccion'];
		$t1        	= $_POST['t1'];
		$t2        	= $_POST['t2'];
		$t3        	= $_POST['t3'];

		$crud->actualizar($id, $nombre, $telefono, $correo, $ciudad, $direccion, $t1, $t2, $t2);
		header("Location: view_mostrar_reporte.php?id=".$id);
	}elseif($_GET['accion']=='eliminar') {

		$crud->eliminar($_GET['id']);
		header('Location: view_mostrar_clientes.php');

	}elseif($_GET['accion']=='e_retiro') {

		$crud->eliminarRetiro($_GET['id']);
		header("Location: view_mostrar_fechas.php?id=".$id."&accion=a");

	}elseif($_GET['accion']=='a'){

		header('Location: actualizar.php');

	}elseif(isset($_POST['guardarRetiro'])) {

		$fk_cliente = $_POST['id'];
		$kilos      = $_POST['kilos'];
		$fecha      = $_POST['fecha'];
		$crud->insertarRetiro($fk_cliente, $kilos, $fecha);
		header("Location: view_mostrar_fechas.php?id=".$fk_cliente);

	}elseif(isset($_POST['actualizarRetiro'])){

		$id         = $_POST['id'];
		$kilos      = $_POST['kilos'];
		$fecha      = $_POST['fecha'];
		$fk_cliente = $_POST['t6fk_cliente0'];
		$crud->actualizarRetiro($id, $kilos, $fecha, $fk_cliente);
		header("Location: view_mostrar_fechas.php?id=".$id."&accion=a");

	}	
	elseif(isset($_POST['fecha'])){

		$mes     = $_POST['mes'];
		$id   = $_POST['id'];
		header("Location: view_mostrar_reporte_mes.php?id=".$id."&fecha=".$mes);
	}
?>