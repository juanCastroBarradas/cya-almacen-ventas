<?php 
	
	require_once "clases/Conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>registro</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.5.1.min.js"></script>
	<script src="js/funciones.js"></script>

</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-6 offset-md-3">
				<div class="card w-100">
					<div class="card-header text-center bg-secondary text-white">Registro de usuario</div>
					<div class="card-body">
						<form id="frmRegistro">
							<div class="row">
								<div class="col-10 offset-1 col-sm-10">
									<label for="nombre">Nombre (*):</label>
									<input type="text" placeholder="Nombre completo" class="form-control" name="nombre" id="nombre">
								</div>
							</div>
							<div class="row">
								<div class="col-10 offset-1 col-sm-10">
									<label for="apPaterno">Apellido paterno (*):</label>
									<input type="text" placeholder="Nombre completo" class="form-control" name="apPaterno" id="apPaterno">
								</div>
							</div>
							<div class="row">
								<div class="col-10 offset-1 col-sm-10">
									<label for="apMaterno">Apellido materno (*):</label>
									<input type="text" placeholder="Nombre completo" class="form-control" name="apMaterno" id="apMaterno">
								</div>
							</div>
							<div class="row">
								<div class="col-10 offset-1 col-sm-10">
									<label for="correo">Correo (*):</label>
									<input type="email" placeholder="email: example@dominio.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" name="correo" id="correo" >
								</div>
							</div>
							<div class="row">
								<div class="col-10 offset-1 col-sm-10">
									<label for="password">Contraseña (*):</label>
									<input type="password" placeholder="Contraseña" class="form-control" name="password" id="password">
								</div>
							</div>
							<p></p>
							<div class="row">
								<div class="col-12 col-sm-6" style="margin-top: 5px;">
									<button class="btn btn-success btn-block" id="registro">Registrar</button>
								</div>
								<div class="col-12 col-sm-6" style="margin-top: 5px;">
									<a href="index.php" class="btn btn-danger btn-block">Cancelar</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){
			vacios=validarFormVacio('frmRegistro');
			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/regLogin/registrarUsuario.php",
				success:function(r){
					alert(r);

					if(r==1){
						alert("Agregado con exito");
					}else{
						//alert("Fallo al agregar :(");
					}
				}
			});
		});
	});
</script>

