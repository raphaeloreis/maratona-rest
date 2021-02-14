<?php
include '../../model/Corredor.php';

class CorredorControl{
	function insert($obj){
		$corredor = new Corredor();
		//echo $obj->titulo;
		return $corredor->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$corredor = new Corredor();
		return $corredor->update($obj,$id);
	}

	function delete($obj,$id){
		$corredor = new Corredor();
		return $corredor->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$corredor = new Corredor();
		return $corredor->findAll();
	}
}

?>