
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>MVC</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<form action="<?php echo $helper->url("usuarios","crear"); ?>" method="POST">
	<div class="add">
		<h3 align="center">Añadir usuario</h3>
		<hr/>
		Nombre: <input type="text" name="nombre" class="form-control"/>
		Apellido: <input type="text" name="apellido" class="form-control"/>
		Email: <input type="text" name="email" class="form-control"/>
		Contraseña: <input type="password" name="password" class="form-control"/>
		<br>
		<div align="center"><input type="submit" name="enviar" class="btn btn-sucess"/> </div>
	</div>
</form>
<br><br>
<div class="add">
	<h3 align="center">Usuarios</h3>
	<hr>
	<section style="height: 300px; overflow-y: scroll;">
		<table cellspacing="1" width="100%">
			<thead>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Acciones</th>
			</thead>
			<tbody>
			<tr>
	<?php 

		if(is_array($allusers)){

		foreach ($allusers as $user) {//recorremos el array de objetos y obtenemos valores ?>
		<td><?php echo $user->id;?></td>
		<td><?php echo $user->nombre;?></td>
		<td><?php echo $user->apellido;?></td>
		<td><?php echo $user->email;?></td>
		<div class="right">

		<td><a href="<?php echo $helper->urlId("usuarios","borrar", $user->id); ?>" class="btn btn-danger"> Borrar </a></td>
			</tr>
		</div>

	<?php }
	} ?>
		</tbody>
		</table>
	</section>
	</div>
</body>
</html>