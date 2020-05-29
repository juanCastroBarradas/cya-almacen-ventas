<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Usuarios.php";

	$obj= new usuarios();

	$pass=sha1($_POST['password']);
	$datos=array(
		'nombre' => $_POST['nombre'],
		'apPaterno' => $_POST['apPaterno'],
		'apMaterno' => $_POST['apMaterno'],
		'correo' => $_POST['correo'],
		'password' => $_POST['password']
	);

	echo $obj->registroUsuario($datos);

 ?>