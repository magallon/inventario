<!DOCTYPE html>
<html lang="es">
<head>
	<title>Acceso</title>
	<meta charset="UTF-8">
	<meta name="viewport" content= "text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/estilos.css">
	<link rel="icon"  href="/img/favicon.ico">

</head>
<body>
<div class="container">
	<center><h1>Control de inventarios</h1></center>
	<div class="jumbotron boxlogin">
	<center><img src="img/surtidora.png" alt=""></center>
		<form action="/administrador" method="POST" name="login" id="login">
			<label for="">Usuario</label>
			<input type="email" name="user" id="user" class="form-control" >
			<label for="">Contraseña</label>
			<input type="password" name="pass" id="pass" class="form-control" > 
			<input type="submit" class="btn btn-primary btn-block btn-lg" value="Iniciar sesión">
		</form>
	</div>
</div>

</body>
</html>