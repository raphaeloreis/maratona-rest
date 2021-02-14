<?php
include '../../model/Prova.php';

class ProvaControl{
	function insert($obj){
		$prova = new Prova();
		//echo $obj->titulo;
		return $prova->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$prova = new Prova();
		return $prova->update($obj,$id);
	}

	function delete($obj,$id){
		$prova = new Prova();
		return $prova->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$prova = new Prova();
		return $prova->findAll();
	}
}

?>