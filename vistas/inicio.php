<?php 
	session_start();
	if(isset($_SESSION['usuario'])){	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	
</head>
<body>
	<?php require_once "menu.php"; ?>

</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>