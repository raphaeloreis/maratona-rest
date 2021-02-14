<?php
include '../../conexao/Conexao.php';

class Prova extends Conexao{
	private $tipo;
    private $data;
    
    function getTipo() {
        return $this->tipo;
    }

    function getData() {
        return $this->data;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
   
    function setData($data) {
        $this->data = $data;
    }
   
    public function insert($obj){
    	$sql = "INSERT INTO prova(tipo,data) VALUES (:tipo,:data)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('tipo',  $obj->tipo);
        $consulta->bindValue('data', $obj->data);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE prova SET tipo = :tipo, data = :data WHERE id = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('tipo',  $obj->nome);
        $consulta->bindValue('data', $obj->data);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM prova WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
		$sql = "SELECT * FROM prova WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->fetchAll();
	}

	public function findAll(){
		$sql = "SELECT * FROM prova";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>