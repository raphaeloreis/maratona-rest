<?php
include '../../model/Resultado.php';

class ResultadoControl{
	function insert($obj){
		$resultado = new Resultado();
		//echo $obj->titulo;
		return $resultado->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$resultado = new Resultado();
		return $resultado->update($obj,$id);
	}

	function delete($obj,$id){
		$resultado = new Resultado();
		return $resultado->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$resultado = new Resultado();
		return $resultado->findAll();
	}
}

?>