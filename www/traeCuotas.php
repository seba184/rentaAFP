<?php

$nameAFP 	= $_GET[‘nameAFP‘];
$reportType	= $_GET[‘reportType‘];


$resultados = array();
$resultados["hora"] = date("F j, Y, g:i a"); 
$resultados["generador"] 	= "Enviado desde revolucion.mobi" ;
$resultados["mensaje"] 		= "Usuario y password incorrectos";
$resultados["validacion"] 	= "ok";
$resultados["nameAFP"] 		= $nameAFP;
$resultados["reportType"] 	= $reportType;

/*convierte los resultados a formato json*/
$resultadosJson = json_encode($resultados);

/*muestra el resultado en un formato que no da problemas de seguridad en browsers */
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';

?>

