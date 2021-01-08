<?php 
require 'database.php';
$conexion = mysql_connect("localhost", "root", "", "php_login_database");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$tipo = $_POST["tipo"];
$raza = $_POST["raza"];
$sexo = $_POST["sexo"];

$sql = "INSERT INTO peluqueria (nombre_dueño, apellido_dueño, tipo_mascota, raza, sexo)";
$result = mysql_query($conexion, $sql);
if ($result) {
    echo "Datos ingresados correctamente";
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
    <title>Hora peluqueria</title>
</head>
<body>
    <main class="main">
        <section class="hora-peluqueria">   
            <div class="contenedor">
                <h1 class="hora__titulo">Hora peluqueria</h1>
            </div>
        </section>
        <section class="datos-peluqueria">
            <h2 class="peluqueria__datos">Ingrese sus datos</h2>
                <form action="" method="POST" class="registro__form" onsubmit="return valido();">
                    <ul>
                        <li>
                            <label for="nombreDueño" class="registro__label">Nombre dueño</label>
                            <input type="text" id="nombree" name="nombre" class="registro__input" required autocomplete="off"> 
                        </li>
                        <li>
                            <label for="apelldioDueño" class="registro__label">Apellido dueño</label>
                            <input type="text" id="apellidoo" name="apellido" class="registro__input"  required autocomplete="off">
                        </li>
                        <li>
                            <label for="tipoMascota" class="registro__label">Tipo de Mascota</label>
                            <input type="text" id="tipoMascotaa" name="tipo" class="registro__input" required autocomplete="off">
                        </li>
                        <li>
                            <label for="Raza" class="registro__label">Raza</label>
                            <input type="text" name="raza" id="razaa" class="registro__input" required autocomplete="off">
                        </li>
                        <li>
                            <label for="sexo" class="registro__label">Sexo</label>
                            <input type="text" name="sexo" id="sexoo" class="registro__input" required autocomplete="off">
                        </li>
                        <button type="submit" class="formulario__submit">Confirmar</button>
                    </ul>
                </form>
        </section>
        <section class="peluqueria__boton">
            <div class="peluqueria-boton">
                <a href="index.html"><img src="imag/volver.png" class="peluqueria__img"></a>
                <a href="tipopago.html"><img src="imag/guardar.jpg" class="peluqueria__img"></a>
            </div>
                
        </section>
    </main>
    
        
    
</body>
</html>