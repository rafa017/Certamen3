<?php

require 'database.php';

$conexion = mysql_connect("localhost", "root", "", "php_login_database");


$codioSeguridad = $_POST["codioSeguridad"];
$fechaExpiracion = $_POST["fechaExpiracion"];

$sql = "INSERT INTO debito (CodigoSeguridad, FechaExpiracion) VALUES ('$codioSeguridad', $fechaExpiracion)";
$result = mysql_query($conexion, $sql);

if ($result) {
    echo "Datos insertados correctamente";
}else {
    echo "Ocurrio un error inesperado";
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validacion.js"></script>
    <title>Document</title>
</head>
<body>
    <section class="debito">
        <div class="container">
            <h1 class="titulo">Ingresa tus datos</h1>
            <h3 class="subtitulo">Tarjeta de debito</h3>
            <form action="debito.php" method="POST" class="formulario__debito" onsubmit="return validacion();">
                <ul>
                <li>
                    <label for="" class="datos__label">Codigo de seguridad</label>
                    <input type="number" id="dato_tarjeta" name="codioSeguridad" class="datos__input" autocomplete="off" required>
                </li>
                <li>
                    <label for="" class="datos__label">fecha de expiracion</label>
                    <input type="number" id="dato_tarjeta" name="fechaExpiracion" class="datos__input" autocomplete="off" required>
                </li>
                <button type="submit" class="btn_debito">Pagar</button>
                </ul>
            </form>
            </div>
    </section>

    <section class="salida">
        <div>
            <a href="tipopago.html"><img src="img/volver.png" class="salida__img"></a>
            <a href="index.html"><img src="img/btn menuprincipal.jpg" class="salida__img"></a>
        </div>
    </section>
</body>
</html>