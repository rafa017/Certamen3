<?php

require 'database.php';
$conexion = mysql_connect("localhots", "root", "", "php_login_database");

$datosTarjeta = $_POST["datosTarjeta"];
$fechaExpiracion = $_POST["fechaExpiracion"];
$digitosSeuridad = $_POST["digitosSeuridad"];

$sql = "INSERT INTO credito (DatosTarjeta, FechaExpiracion, dijitosSeguridad) VALUES ('$datosTarjeta', '$fechaExpiracion',$dijitosSeguridad')";
$result = mysql_query($conexion, $sql);

if($result){
    echo "Datos ingresados correctamente";
}else {
    echo "Ocurrio un error inesperado";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validacion.js"></script>
    <title>Document</title>
</head>
<body>
    <section class="tarjeta__credito">
        <div class="contenedor">
            
            <h1 class="credito__titulo">Ingresa tus datos</h1>
            <h3 class="credito_subtitulo">Tarjeta de credito</h3>
            <form method="POST" action="credito.php" class="datos__from" onsubmit="return validando();"> 
                <ul>
                    <li>
                        <label for="" class="datos__label">Datos tarjeta</label>
                        <input type="number" id="datos__tarjeta" name="datosTarjeta" class="datos__input" autocomplete="off" required>
                    </li>
                    <li>
                        <label for="" class="datos__label">Fecha de expiracion</label>
                        <input type="number" id="fecha__expiracion" name="fechaExpiracion" class="datos__input" autocomplete="off" required>  
                    </li>
                    <li>
                        <label for="" class="datos__label">Dijitos de seguridad</label>
                        <input type="number" name="digitosSeuridad" id="dejitos__seguridad" class="datos__input" autocomplete="off" required>
                    </li>
                </ul>
                <button type="submit" class="btn__credito">Pagar</button>
            </form>

        </div>
    </section>
    <section class="foot"> 
        <div>
            <a href="tipopago.html"><img src="img/volver.png" class="btn__accion"></a>
            <a href="index.html"><img src="img/btn menuprincipal.jpg" class="btn__accion"></a>
        </div>
    </section>
</body>
</html>