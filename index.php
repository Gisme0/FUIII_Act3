<!DOCTYPE html>
<html>
<head>
	<title>RegistroE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de Empleados</h1>
    	<input type="text" name="nom" placeholder="Nombre">
    	<input type="text" name="ape" placeholder="Apellido">
		<input type="text" name="noe" placeholder="NoEmpleado">
		<input type="email" name="cor" placeholder="Correo">
		<input type="text" name="cla" placeholder="Clave">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>