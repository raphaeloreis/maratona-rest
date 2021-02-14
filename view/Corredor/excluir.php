<?php
include '../../control/CorredorControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;


if(!empty($data)){	
 $corredorControl = new CorredorControl();
 $corredorControl->delete($obj,$id);
 header('Location:listar.php');
}







?>