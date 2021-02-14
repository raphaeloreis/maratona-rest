<?php
include '../../control/RegistroControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

if(!empty($data)){	
    $registroControl = new RegistroControl();
    $registroControl->update($obj , $id);
    header('Location:listar.php');
}







?>