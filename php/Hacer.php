<?php
	include "Conexion.php";

	$DNI1 = $_POST["DNI"];
	$Nombre1 = $_POST["Nombre"];
	$ap1 = $_POST["ap"];
	$am1 = $_POST["am"];
	$nt1 = $_POST["nt"];
	$Estado1 = $_POST["Estado"];
	$Población1 = $_POST["Población"];
	$Colonia1 = $_POST["Colonia"];
	$Calle1 = $_POST["Calle"];
	$nc1 = $_POST["nc"];
	$Salario1 = $_POST["Salario"];
	$recorrido1 = $_POST["recorrido"];
	$Hlaboral1 = $_POST["H_laboral"];

	$query = "UPDATE camioneros SET
				CA_DNI='$DNI1', Nombre='$Nombre1', Apellido_p='$ap1', Apellido_m='$am1', N_teléfono='$nt1', Estado_vive='$Estado1', Población='$Población1',
				Colonia='$Colonia1', Calle='$Calle1', N_casa='$nc1', Salario='$Salario1', recorrido='$recorrido1', H_Laboral='$Hlaboral1' WHERE CA_DNI='$DNI1'";
				 
	mysqli_query($link, $query);
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Modificado</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/hacer.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
	<div class="contenedor">
		<?php
			if (mysqli_affected_rows($link) > 0) {
				echo "<div class='mensaje correcto'>Actualización correcta</div>";
			} else {
				echo "<div class='mensaje error'>Actualización incorrecta. Error: " . mysqli_errno($link) . "</div>";
			}
			include "Cerrar.php";
		?>
	    <a href="Modificación.php" class="btn">Regresar a Actualizar Otro Chofer</a>
		<br><a href='index.php'><img src='..\imagenes\home.png' height='100' width='90'></a>
	</div>
</body>
</html>