<?php
include "Conexion.php";

$query = "SELECT * FROM camioneros";
$res = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reporte.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Lista de Choferes</h1>
    
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>No. Telefónico</th>
            <th>Estado Residente</th>
            <th>Codigo Postal</th>
            <th>Población</th>
            <th>Colonia</th>
            <th>Calle</th>
            <th>No. de Casa</th>
            <th>Salario</th>
            <th>Recorridos</th>
            <th>Horario Laboral</th>
        </tr>
        
        <?php
        while ($fila = mysqli_fetch_row($res)) {
            echo "<tr>
                <td>$fila[0]</td>
                <td>$fila[1]</td>
                <td>$fila[2]</td>
                <td>$fila[3]</td>
                <td>$fila[4]</td>
                <td>$fila[6]</td>
                <td>$fila[5]</td>
                <td>$fila[7]</td>
                <td>$fila[8]</td>
                <td>$fila[9]</td>
                <td>$fila[10]</td>
                <td>$$fila[11]</td>
                <td>$fila[12]</td>
                <td>$fila[13]</td>
            </tr>";
        }
        ?>
    </table>
    
    <center>
        <a href="index.php"><img src="..\imagenes\home.png" height="100" width="90" alt="Inicio"></a>
    </center>
</body>
</html>

<?php
include "Cerrar.php";
?>
