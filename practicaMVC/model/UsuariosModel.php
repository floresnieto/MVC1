<?php
/**
* 
*/
class UsuariosModel extends ModeloBase
{

	private $table;
	
	function __construct()
	{
		$this->table="usuarios";
		parent::__construct($this->table);
	}



	//metodo de consulta
	public function getUnUsuario()
	{
		$query="SELECT * FROM usuarios WHERE email='kenyamejia07@gmail.com'";
		$usuario=$this->ejecutarSQL($query);
		return $usuario;
	}
}
?>