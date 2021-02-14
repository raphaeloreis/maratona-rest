<?php
include '../../model/Registro.php';

class RegistroControl{
	function insert($obj){
		$registro = new Registro();
		//echo $obj->titulo;
		return $registro->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$registro = new Registro();
		return $registro->update($obj,$id);
	}

	function delete($obj,$id){
		$registro = new Registro();
		return $registro->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$registro = new Registro();
		return $registro->findAll();
	}
}

?>