<?php 

require 'database.php';
$conexion = mysql_connect("localhost", "root", "", "php_login_database");

$nombreDueño = $_POST["nombreDueño"];
$apellidoDueño = $_POST["apellidoDueño"];
$tipoMascota = $_POST["tipoMascota"];
$razaMascota = $_POST["razaMascota"];
$sexo = $_POST["sexo"];

$sql = "INSERT INTO medico (nombre_dueño, apellido_dueño, tipo_mascota, raza, sexo) VALUES ('$nombmbreDueño', '$apellellidoDueño', '$tipotipoMascota', '$razarazaMascota', '$sexo')";
$result = mysql_query($conexion, $sql);

if ($result) {
    echo "Datos guardados correctamente";
}else{
    echo "Algo salio mal";
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validacion.js"></script>
    <title>Hora Medica</title>
</head>
<body>
    <main class="main">
        <section class="hora-medico">
            <div class="contenedor">
                <h1 class="hora__titulo">Hora medica</h1>
            </div>
        </section>
        <section class="medico-datos">
          <h2 class="formulario__titulo">Ingrese sus datos:</h2>   
             <form action="medico.php" method="POST" class="registro__form" onsubmit="return validar();">
                <ul>
                    <li>
                        <label for="nombreDueño" class="registro__label">Nombre dueño</label>
                        <input type="text" id="nombreDueño" name="nombreDueño" class="registro__input" required autocomplete="off"> 
                    </li>
                    <li>
                        <label for="apelldioDueño" class="registro__label">Apellido dueño</label>
                        <input type="text" id="apelldioDueño" name="apellidoDueño" class="registro__input"  required autocomplete="off">
                    </li>
                    <li>
                        <label for="tipoMascota" class="registro__label">Tipo de Mascota</label>
                        <input type="text" id="tipoMascota" name="tipoMascota" class="registro__input" required autocomplete="off">
                    </li>
                    <li>
                        <label for="Raza" class="registro__label">Raza</label>
                        <input type="text" name="razaMascota" id="razaMascota" class="registro__input" required autocomplete="off">
                    </li>
                    <li>
                        <label for="sexo" class="registro__label">Sexo</label>
                        <input type="text" name="sexo" id="sexo" class="registro__input" required autocomplete="off">
                    </li>
                    <input type="submit" class="formulario__submit">
                </ul>
                
            </form>
        </section>
            <section class="medico-bot">
                <div class="medico__boton">
                        <a href="index.html"><img src="imag/volver.png" class="medico__img"></a>
                        <a href="tipopago.html"><img src="imag/guardar.jpg" class="medico__img"></a>
                </div>
            </section>
    </main>
</body>
</html>