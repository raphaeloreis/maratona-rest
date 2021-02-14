<?php
include '../../conexao/Conexao.php';

class Registro extends Conexao{
	private $id_corredor;
    private $id_prova;
    
    function getId_corredor() {
        return $this->id_corredor;
    }

    function getId_prova() {
        return $this->id_prova;
    }

    function setId_corredor($id_corredor) {
        $this->id_corredor = $id_corredor;
    }
   
    function setId_prova($id_prova) {
        $this->id_prova = $id_prova;
    }
   
    public function insert($obj){
    	$sql = "INSERT INTO registro(id_corredor,id_prova) VALUES (:id_corredor,:id_prova)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_corredor',  $obj->id_corredor);
        $consulta->bindValue('id_prova', $obj->id_prova);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE registro SET id_corredor = :id_corredor, id_prova = :id_prova WHERE id = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_corredor',  $obj->nome);
        $consulta->bindValue('id_prova', $obj->id_prova);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM registro WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM registro";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>