<?php
/**
* 
*/
class UsuariosController extends ControladorBase
{
	
	function __construct()
	{
	parent::__construct();	
	}

	public function indexAction()
	{
		//objeto usuario

		$usuario=new Usuario();
		//conseguimos todos los usuarios

		$allusers=$usuario->getAll();

		//cargamos la vista index y le pasamos valores

		$this->view("index",array("allusers"=>$allusers));
	}

	public function crear()
	{
		if (isset($_POST['nombre'])) {
		    //Creamos un usuario


		    $usuario=new Usuario();

		    $usuario->setNombre($_POST['nombre']);
		    $usuario->setApellido($_POST['apellido']);
		    $usuario->setEmail($_POST['email']);
		    $usuario->setPassword(sha1($_POST['password']));
		    $save=$usuario->save();
		}
		$this->redirect("Usuarios","index");
	}


	public function borrar()
	{
		if (isset($_GET['id'])) {
			$id=(int)$_GET['id'];
			$usuario= new Usuario();
			$usuario->deleteById($id);
		}

		$this->redirect();
	}

}
?>