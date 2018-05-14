<?php

class Conectar
{
	private $driver, $host,$user,$pass,$database,$charset;

	function __construct()
	{
		//arreglo con la informacion de conexion

		$dataCon=require_once 'config/database.php';

		$this->driver=$dataCon['driver'];
		$this->host=$dataCon['host'];
		$this->user=$dataCon['user'];
		$this->pass=$dataCon['pass'];
		$this->database=$dataCon['database'];
		$this->charset=$dataCon['charset'];

	}

	//Metodo de conexion

	public function conexion()
	{
		if ($this->driver=='mysql'|| $this->driver==null) {
			$con= new mysqli($this->host,$this->user,$this->pass,$this->database);

			//seteamos el tipo de cojetamiento

			$con->query("SET NAMES'".$this->charset."'");

			
		}
		return $con;
		
	}
	
}
?>