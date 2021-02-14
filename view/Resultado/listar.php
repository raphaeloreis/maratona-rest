<?php
include '../../control/ResultadoControl.php';
$resultadoControl = new ResultadoControl();

header('Content-Type: application/json');

foreach($resultadoControl->findAll() as $valor){
	echo json_encode($valor);
}


?>