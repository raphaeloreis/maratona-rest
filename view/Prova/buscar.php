<?php
include '../../control/ProvaControl.php';
$provaControl = new ProvaControl();

header('Content-Type: application/json');

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

foreach($provaControl->find($id) as $valor){
	echo json_encode($valor);
}

?>