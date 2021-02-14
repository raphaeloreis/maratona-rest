<?php
include '../../control/ProvaControl.php';
$provaControl = new ProvaControl();

header('Content-Type: application/json');

foreach($provaControl->findAll() as $valor){
	echo json_encode($valor);
}


?>