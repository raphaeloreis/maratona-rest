<?php
include '../../control/RegistroControl.php';
$registroControl = new RegistroControl();

header('Content-Type: application/json');

foreach($registroControl->findAll() as $valor){
	echo json_encode($valor);
}


?>