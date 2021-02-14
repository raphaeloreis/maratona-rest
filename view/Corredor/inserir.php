<?php
include '../../control/CorredorControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;



if(!empty($data)){	
 $corredorControl = new CorredorControl();
 $corredorControl->insert($obj);
 header('Location:listar.php');
}







?>