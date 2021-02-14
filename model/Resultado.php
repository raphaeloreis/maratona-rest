<?php
include '../../conexao/Conexao.php';

class Resultado extends Conexao{
	private $id_corredor;
    private $id_prova;
    private $hora_inicio;
    private $hora_conclusao;
    
    function getId_corredor() {
        return $this->id_corredor;
    }

    function getId_prova() {
        return $this->id_prova;
    }

    function getHora_inicio() {
        return $this->hora_inicio;
    }

    function getHora_conclusao() {
        return $this->hora_conclusao;
    }

    function setId_corredor($id_corredor) {
        $this->id_corredor = $id_corredor;
    }
   
    function setId_prova($id_prova) {
        $this->id_prova = $id_prova;
    }

    function setHora_inicio($hora_inicio) {
        $this->hora_inicio = $hora_inicioor;
    }
   
    function setHora_conclusao($hora_conclusao) {
        $this->hora_conclusao = $hora_conclusao;
    }
   
    public function insert($obj){
    	$sql = "INSERT INTO resultado(id_corredor,id_prova,hora_inicio,hora_conclusao) VALUES (:id_corredor, :id_prova, :hora_inicio, :hora_conclusao)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_corredor',  $obj->id_corredor);
        $consulta->bindValue('id_prova', $obj->id_prova);
        $consulta->bindValue('hora_inicio', $obj->hora_inicio);
        $consulta->bindValue('hora_conclusao', $obj->hora_conclusao);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE resultado SET id_corredor = :id_corredor, id_prova = :id_prova, hora_inicio = :hora_inicio, hora_conclusao = :hora_conclusao WHERE id = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_corredor',  $obj->nome);
        $consulta->bindValue('id_prova', $obj->id_prova);
        $consulta->bindValue('hora_inicio', $obj->hora_inicio);
        $consulta->bindValue('hora_conclusao', $obj->hora_conclusao);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM resultado WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $sql = "SELECT * FROM resultado WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->fetchAll();
	}

	public function findAll(){
		$sql = "SELECT * FROM resultado";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>