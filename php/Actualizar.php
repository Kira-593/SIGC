<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/actualizar.css">
    <script src="../js/camionero.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<img src="../Imagenes/logo.png" class="logo">
<div class="contenedor">
        <h2>Modificar la Información del Chofer</h2>
        <?php
        include "Conexion.php";

        $DNI = $_GET["sc"];
        $query = "SELECT * FROM camioneros WHERE CA_DNI='$DNI'";
        $res = mysqli_query($link, $query);
        $row = mysqli_fetch_array($res);
        ?>

        <form action="Hacer.php?action=hacer" method="POST">
            <input type="hidden" value="<?= $row[0] ?>" name="DNI">
            <div class="row">
                <div class="col-md-6">
                    <label for="DNI">DNI del Camionero:</label>
                    <p><?= $row[0] ?></p>
                </div>
                <div class="col-md-6">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" value="<?= $row[1] ?>" name="Nombre" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="ap">Apellido Paterno:</label>
                    <input type="text" value="<?= $row[2] ?>" name="ap" maxlength="20" required />
                </div>
                <div class="col-md-6">
                    <label for="am">Apellido Materno:</label>
                    <input type="text" value="<?= $row[3] ?>" name="am" maxlength="20" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="nt">Número Telefónico:</label>
                    <input type="number" value="<?= $row[4] ?>" name="nt" id="nt" required />
                </div>
                <div class="col-md-6">
                    <label for="Estado">Estado:</label>
                    <input type="text" value="<?= $row[5] ?>" name="Estado" maxlength="20" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="CodigoP">Código Postal:</label>
                    <input type="number" value="<?= $row[6] ?>" name="CodigoP" id="CodigoP" required />
                </div>
                <div class="col-md-6">
                    <label for="Población">Población:</label>
                    <input type="text" value="<?= $row[7] ?>" name="Población" maxlength="20" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="Colonia">Colonia:</label>
                    <input type="text" value="<?= $row[8] ?>" name="Colonia" maxlength="20" required />
                </div>
                <div class="col-md-6">
                    <label for="Calle">Calle:</label>
                    <input type="text" value="<?= $row[9] ?>" name="Calle" maxlength="20" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="nc">Número de Casa:</label>
                    <input type="text" value="<?= $row[10] ?>" name="nc" maxlength="5" required />
                </div>
                <div class="col-md-6">
                    <label for="Salario">Salario:</label>
                    <input type="text" value="<?= $row[11] ?>" name="Salario" maxlength="10" required />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="recorrido">Recorrido:</label>
                    <input type="text" value="<?= $row[12] ?>" name="recorrido" maxlength="20" required />
                </div>
                <div class="col-md-6">
                    <label for="H_laboral">Horario Laboral:</label>
                    <input type="text" value="<?= $row[13] ?>" name="H_laboral" maxlength="20" required />
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <input type="submit" value="Guardar" class="btn btn-primary">
                    <input type="reset" value="Limpiar" class="btn btn-secondary">
                </div>
            </div>
        </form>
        <a href="Modificación.php" class="btn btn-warning mt-3">Regresar a Actualizar Otro Chofer</a><br>
        <a href="index.php" class="back-link"><img src="../Imagenes/home.png" height="100" width="90"></a>
    </div>
</body>
</html>