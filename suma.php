<?php 
$respose = array();
if(isset($_POST['suma'])){
	$valor1 = $_POST['valor1'];
	$valor2 = $_POST['valor2'];
	$respuesta = intval($valor1) + intval($valor2);

	$response['respuesta'] = $respuesta;
	$response['success'] = true;
}else{
	$response['success'] = false;
}
echo(json_encode($respose));