<?php
// incluye la clase Db
require_once('conexion.php');

	class Crud_Cliente{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($nombre, $telefono, $correo, $ciudad, $direccion, $t1, $t2, $t3){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO cliente values(NULL,:nombre,:telefono,:correo,:ciudad,:direccion,:t1,:t2,:t3)');
			$insert->bindValue('nombre',	$nombre);
			$insert->bindValue('telefono',	$telefono);
			$insert->bindValue('correo',	$correo);
			$insert->bindValue('ciudad',	$ciudad);
			$insert->bindValue('direccion',	$direccion);
			$insert->bindValue('t1',		$t1);
			$insert->bindValue('t2',		$t2);
			$insert->bindValue('t3',		$t3);
			$insert->execute();

		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaClientes=[];
			$select=$db->query('SELECT * FROM cliente');
			$result = $select->fetchAll();
			return $result;
		}

		// método para eliminar un cliente, recibe como parámetro el id del cliente
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM cliente WHERE id=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para eliminar un retiro, recibe como parámetro el id del retiro
		public function eliminarRetiro($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM retiro WHERE id=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}


		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerCliente($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM cliente WHERE id=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$result=$select->fetch();

			return $result;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($id, $nombre, $telefono, $correo, $ciudad, $direccion, $t1, $t2, $t3){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE cliente SET nombre=:nombre,telefono=:telefono,correo=:correo,ciudad=:ciudad,direccion=:direccion,t1=:t1,t2=:t2,t3=:t3 WHERE id=:id');
			$actualizar->bindValue('id',	 	$id);
			$actualizar->bindValue('nombre',	$nombre);
			$actualizar->bindValue('telefono',	$telefono);
			$actualizar->bindValue('correo',	$correo);
			$actualizar->bindValue('ciudad',	$ciudad);
			$actualizar->bindValue('direccion',	$direccion);
			$actualizar->bindValue('t1',		$t1);
			$actualizar->bindValue('t2',		$t2);
			$actualizar->bindValue('t3',		$t3);
			$actualizar->execute();
		}

		//TABLA RETIRO

		public function insertarRetiro($fk_cliente, $fecha, $kilos){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO retiro values(NULL,:fecha,:kilos,:fk_cliente)');
			$insert->bindValue('fecha',			$fecha);
			$insert->bindValue('kilos',			$kilos);
			$insert->bindValue('fk_cliente',	$fk_cliente);
			$insert->execute();
		}

		public function actualizarRetiro($id, $kilos, $fecha, $fk_cliente){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE retiro SET fecha=:fecha,kilos=:kilos  WHERE id=:id');
			$actualizar->bindValue('id',	 	$id);
			$actualizar->bindValue('fecha',	    $fecha);
			$actualizar->bindValue('kilos',		$kilos);
			$actualizar->execute();
		}

		public function obtenerRetiroMes($id,$mes){
			$db=Db::conectar();
			$select=$db->prepare("SELECT * FROM retiro where fk_cliente = '".$id."' AND fecha ");
			$select->bindValue(':id',$id);
			$select->bindValue(':cliente',$cliente);
			$select->execute();
			$result=$select->fetch();
			return $result;
		}

	

		public function obtenerRetiro($id){
			$db=Db::conectar();
			$select=$db->query("SELECT * FROM retiro where fk_cliente = '".$id."' ");
			$result = $select->fetchAll();
			return $result;
		}

		public function obtenerRetiroCliente($id,$cliente){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM retiro WHERE id=:id and fk_cliente=:cliente');
			$select->bindValue(':id',$id);
			$select->bindValue(':cliente',$cliente);
			$select->execute();
			$result=$select->fetch();
			return $result;
		}



	}
?>