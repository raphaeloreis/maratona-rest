<?php
include '../../control/ProvaControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

if(!empty($data)){	
    $provaControl = new ProvaControl();
    $provaControl->delete($obj,$id);
    header('Location:listar.php');
}







?>