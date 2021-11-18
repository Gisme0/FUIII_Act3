<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nom']) >= 1 && 
	strlen($_POST['ape']) >= 1 &&
	strlen($_POST['noe']) >= 1 &&
	strlen($_POST['cor']) >= 1 &&
	strlen($_POST['cla']) >= 1) {
	    $nom = trim($_POST['nom']);
	    $ape= trim($_POST['ape']);
		$noe = trim($_POST['noe']);
		$cor = trim($_POST['cor']);
		$cla = trim($_POST['cla']);
	    $consulta = "INSERT INTO empleado(Nombre, Apellido, NoEmpleado, Correo, Clave) VALUES ('$nom','$ape','$noe','$cor','$cla')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>