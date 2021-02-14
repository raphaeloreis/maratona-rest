<?php
include '../../control/CorredorControl.php';
$corredorControl = new CorredorControl();

header('Content-Type: application/json');

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

foreach($corredorControl->find($id) as $valor){
	echo json_encode($valor);
}

?>