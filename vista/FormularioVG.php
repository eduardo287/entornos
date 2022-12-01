<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vista/css/style.css">
	<title>Formulario</title>
</head>
<body>
  
	<form class="FormRegistro" action ="?m=registrarse" method = "post">
		<center><a href="?m"><img class="LOGVG" src="vista/IMGPG/LOGOVOGA.jpg"></a></center>
		<center><h2>Crear Cuenta</h2></center>
		<label for="Nombres"> Nombre(s): <input class="control" type="text" name="nom" id="Nombres" placeholder="Ingrese su nombre"></label>
		<label for="Apellido Paterno"> Apellido Paterno: <input class="control" type="text" name="apellidoPat" id="Apellido Paterno" placeholder="Ingrese su apellido paterno"></label>
		<label for="Apellido Materno"> Apellido Materno: <input class="control" type="text" name="apellidoMat" id="Apellido Materno" placeholder="Ingrese su apellido materno"></label>
		<label for="Email"> Email: <input class="control" type="email" name="email" id="Email" value placeholder="Ingrese su email"></label>
	    <label for="Contraseña"> Contraseña: <input class="control" type="password" name="pass" id="Contraseña" placeholder="Ingrese su contraseña"></label>
		<p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
		<button class="botons" type="submit" name="name" value="Registrar">Registrarse</button>
		<p><a href="?m=formularioLoguearse">¿Ya tengo cuenta?</a></p>
    </form>

</body>
</html>