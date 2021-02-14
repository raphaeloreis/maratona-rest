<?php
include '../../control/ResultadoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;


if(!empty($data)){	
    $resultadoControl = new ResultadoControl();
    $resultadoControl->update($obj , $id);
    header('Location:listar.php');
}







?>