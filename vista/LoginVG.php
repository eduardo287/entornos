<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vista/css/style.css">
	<title>Formulario</title>
</head>
<body>
  
	<form class="FormRegistro" action="?m=login" method="post">
		<center><a href="?m="><img class="LOGVG" src="vista/IMGPG/LOGOVOGA.jpg"></a></center>
		<center><h2>Iniciar Sesion</h2></center>
		<h4> Email: <input class="control" type="email" name="email" id="Email" value placeholder="Ingrese su email"></h4>
     	<h4> Contraseña: <input class="control" type="password" name="pass" id="Contraseña" placeholder="Ingrese su contraseña"></h4>
		<button class="botons" type="submit" name="event" value="Iniciar Sesion">Iniciar Sesión</button>
		<p><a href="?m=formularioRegistro">Crear una cuenta</a></p>

    </form>

</body>
</html>