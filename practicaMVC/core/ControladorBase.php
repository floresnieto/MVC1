<?php

class ControladorBase
{
	
	function __construct()
	{
		require_once 'EntidadBase.php';
		require_once 'ModeloBase.php';

		foreach (glob("model/*.php")as $archivo) {
			require_once $archivo;
		}
	}

	public function view($vista,$datos)
	{
	 //Recorremos los datos que mandamos para poder meterlos en una sola varible


		foreach ($datos as $id_assoc => $valor) {
			${$id_assoc}=$valor;
		}
		//require de AyudaVista para usar el metodo url que nos permite acceder al metodo de un controlador por url


		require_once 'AyudaVistas.php';
		$helper= new AyudaVistas();
		$data='view/'.$vista.'View.php';
		require_once $data;

	}


	public function redirect($controlador=CONTROLADOR_DEFECTO, $accion=ACCION_DEFECTO)
	{
		header('Location:index.php?controller='.$controlador.'&action='.$accion);
	}
}
?>