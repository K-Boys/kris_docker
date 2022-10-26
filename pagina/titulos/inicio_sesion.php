<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body id="sesion">




	
<div align="center" id="logo" >	
	<img src="css/logo2.0.png">
</div>

<div id="sesion">
	<form action="validar.php" method="POST">
		<h2>INICIO DE SESIÓN</h2>
		
		<input type="text" name="nombre_usuario" required="" placeholder="Nombre De Usuario"> 
		<input type="password" name="contraseña" required="" placeholder="Contraseña">
	
		<button onclick="return inicio()" type="submit">Ingresar</button>
	
	
	</form>
</div>
</body>
</html>