<?php
include '../../conexao/Conexao.php';

class Corredor extends Conexao{
	private $nome;
    private $cpf;
    private $nascimento;

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNascimento() {
        return $this->nascimento;
    }
  
    function setNome($nome) {
        $this->nome = $nome;
    }
   
    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
   
    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    public function insert($obj){
    	$sql = "INSERT INTO corredor(nome,cpf,nascimento) VALUES (:nome,:cpf,:nascimento)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('cpf', $obj->cpf);
        $consulta->bindValue('nascimento' , $obj->nascimento);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE corredor SET nome = :nome, cpf = :cpf, nascimento = :nascimento WHERE id = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('cpf', $obj->cpf);
        $consulta->bindValue('nascimento' , $obj->nascimento);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM corredor WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id){
        $sql = "SELECT * FROM corredor WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->fetchAll();
	}

	public function findAll(){
		$sql = "SELECT * FROM corredor";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>