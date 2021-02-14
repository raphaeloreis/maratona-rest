<?php
include '../../control/RegistroControl.php';
$registroControl = new RegistroControl();

header('Content-Type: application/json');

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

foreach($registroControl->find($id) as $valor){
	echo json_encode($valor);
}

?>