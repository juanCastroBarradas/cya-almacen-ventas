<?php 
	
	require_once "clases/Conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login de usuario</title>
	<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css" crossorigin="anonymous">
	<script src="librerias/jquery-3.5.1.min.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script src="js/funciones.js"></script>

</head>
<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1 col-sm-10 offset-sm-1 col-md-6 offset-md-3">
				<div class="card w-100">
					<div class="card-header text-center bg-secondary text-white">Control de almacen - ventas</div>
					<div class="card-body">
						<p style="text-align: center;">
							<img src="img/ventas.jpg"  height="190">
						</p>
						<form id="frmLogin">
							<div class="row">
								<div class="col-10 offset-1 col-sm-10">
									<label for="correo">Correo (*):</label>
									<input type="email" placeholder="email: example@dominio.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" name="correo" id="correo" >
								</div>
							</div>
							<p></p>
							<div class="row">
								<div class="col-10 offset-1 col-sm-10">
									<label for="password">Contraseña (*):</label>
									<input type="password" placeholder="Contraseña" class="form-control" name="password" id="password">
								</div>
							</div>
							<p></p>
							<div class="row">
								<div class="col-12 col-sm-6" style="margin-top: 5px;">
									<button class="btn btn-success btn-block" id="inciaSesion">iniciar sesion</button>
								</div>
								<div class="col-12 col-sm-6" style="margin-top: 5px;">
									<a href="registro.php" class="btn btn-primary btn-block">Registrar</a>
								</div>
							</div>							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="mdlIngresaAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">¡Mensaje de error!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Algun campo o campos no fueron capturados. Asegurate de llenar los campos obligatorios(*) y intenta de nuevo ingresar.
				</div>
			</div>
		</div>
	</div>




</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#inciaSesion').click(function(){
			vacios = validarFormVacio('frmLogin');
			if(vacios > 0){
				$('#mdlIngresaAlert').modal({
					show: true
				});
				//alert("Debes llenar todos los campos!!");
				return false;
			}

			datos=$('#frmLogin').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/regLogin/login.php",
				success:function(r){

					if(r==1){
						window.location="vistas/inicio.php";
					}else{
						//alert("No se pudo acceder :(");
					}
				}
				
			});
			return false
		});
	});
</script>