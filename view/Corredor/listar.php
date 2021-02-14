<?php
include '../../control/CorredorControl.php';
$corredorControl = new CorredorControl();

header('Content-Type: application/json');

foreach($corredorControl->findAll() as $valor){
	echo json_encode($valor);
}


?>