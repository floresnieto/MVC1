<?php
/**
* 
*/
class AyudaVistas 
{
	
	public function url($controlador=CONTROLADOR_DEFECTO, $accion=ACCION_DEFECTO)
	{
		$urlString='index.php?controller='.$controlador.'&action='.$accion;

		return $urlString;
	}

	public function urlId($controlador=CONTROLADOR_DEFECTO, $accion=ACCION_DEFECTO,$id)
	{
		$urlString='index.php?controller='.$controlador.'&action='.$accion.'&id='.$id;

		return $urlString;
	}
}
?>