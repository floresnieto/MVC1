<?php
//configuracion global
require_once 'config/global.php';

//base para los controladores
require_once 'core/ControladorBase.php';

//funcion para el controlador frontal

require_once 'core/ControladorFrontal.func.php';

//cCargamos controlladores y acciones
if (isset($_GET['controller'])) {
	$controllerObj=cargarControlador($_GET['controller']);
	lanzarAccion($controllerObj);
}else{
	$controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
	lanzarAccion($controllerObj);
}
?>





