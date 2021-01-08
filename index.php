<?php
require 'database.php';
$conexion = mysql_connect("localhost", "root", "", "php_login_database");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

$sql = "INSERT INTO index (Nombre, apellido, correo, telefono) VALUES ('$nombre', $apellido', '$correo', '$telefono')";
$result = mysql_query($conexion, $sql);

if($result){
    echo "Datos ingresados correctamente";
}else {
    echo "Ocurrio un error";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://file.myfontastic.com/QEFpZMmSwvUjf6EHqVMrUZ/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/validacion.js"></script>
    <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="header">  
        <div class="contenedor">
            <img src="img/logo.png" class="logo">
            <span class="icon-menu" id="btn-menu"></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <li class="menu__item"><a class="menu__link">Inicio</a></li>
                    <li class="menu__item"><a class="menu__link">Servicios</a></li>
                    <li class="menu__item"><a class="menu__link">Reserva hora</a></li>
                    <li class="menu__item"><a class="menu__link">Clientes</a></li>
                    <li class="menu__item"><a class="menu__link">Contactos</a></li>
                    <li class="menu__item"><a href="inicio.php">Registrate</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="banner">
        <img src="img/logopetvet.jpeg" class="banner__img">
        <h1 class="banner__titulo">CLINICA VETERINARIA PETVET</h1>
        <P class="banner__txt">Bienvenido a nuestro sitio web</P>
    </div>
    <main class="main">
        <section class="info">
            <div class="contenedor">
                <article class="info__columna">
                    <img src="img/somos.jpg" alt="">
                    <h2 class="info__titulo">Conocenos</h2>
                    <p>Somos una Clinica veterinaria fundada para poder tratar a tus mascotas de la manera que se merecen,
                        porque sabemos que es parte de tu familia, queremos entregarle la mejor atencion de salud a tu mascota
                        y a la misma vez que tu estes tranquilo.
                        Te invitamos a que conozcas a travez de nuestro sitio web todos los servicios con los cuales contamos
                        y las fechas de atencion disponibles para ti y tu mascota. Contamos con un gran prestigio de <b>responsabilidad,compromiso y sobre todo profesionalismo</b>.    </p>
                </article>
            </div>
        </section>
        <section class="servicios">
            <div class="contenedor">
                <h2 class="servicios__titulo">Nuestros servicios</h2>
                <p class="servicios__txt">Nos especializamos en los siguientes servicios:</p>
                <div class="servicios__columna">
                    <h3>Cardiologia</h3>
                     <img src="img/cardiologia.jpg" class="servicios__img">
                </div>
                <div class="servicios__columna">
                    <h3>Radiologia</h3>
                     <img src="img/radiologia.jpg" class="servicios__img">
                </div>
                <div class="servicios__columna">
                    <h3>Kinesiologia</h3>
                     <img src="img/kinesiologia.jpg" class="servicios__img">
                </div>
                <div class="servicios__columna">
                    <h3>Cirugia</h3>
                     <img src="img/cirujia.jpg" class="servicios__img">
                </div>
                <div class="servicios__columna">
                    <h3>Ecografia</h3>
                     <img src="img/ecografia.jpg" class="servicios__img">
                </div>
                <div class="servicios__columna">
                    <h3>Laboratorio</h3>
                     <img src="img/laboratorio.jpg" class="servicios__img">
                </div>
                <div class="servicios__columna">
                    <h3>Peluqueria</h3>
                     <img src="img/peluqueria.jpg" class="servicios__img">
                </div>
                <div class="servicios__columna">
                    <h3>Medicina general</h3>
                     <img src="img/medicina.jpg" class="servicios__img">
                </div>
             </div>
        </section>
        <section class="hora">
            <div class="contenedor">
                <h2 class="hora__titulo">Reserva tu hora de atencion aqui</h2>
                <i>Para una mayor comodidad ahora puedes agendar horas de atencion de forma online a travez de nuestra pagina web</i>
                <div class="hora__tipo">
                    <p class="hora__txt">Hora de consulta medica. Valor: $10.000</p>
                    <a href="medico.html"><img src="img/boton.jpg" class="hora__bot"></a>
                </div>
                <div class="hora__tipo">
                    <p class="hora__txt">peluqueria y estetica. Valor: $8.000</p>
                    <a href="peluqueria.html"><img src="img/boton.jpg" class="hora__bot"></a>
                </div>
            </div>
        </section>
        <section class="clientes">
            <div class="contenedor">
                <h2 class="clientes__titulo">Nuestros clientes</h2>
                <p class="clientes__txt">Lo que nuestros clientes piensan</p>
                <div class="clientes__columna">
                    <h3>Valeria Hortega</h3>
                    <p class="clientes__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora nam magni ex eveniet cupiditate harum amet aut ut omnis! Aperiam, et? Necessitatibus, sit voluptas?</p>
                    <img src="img/mujer.jpg" class="clientes__img">
                </div>
                <div class="clientes__columna">
                    <h3>Camilo Benitez</h3>
                    <p class="clientes__txt">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab officia temporibus impedit, cum aliquam esse, praesentium incidunt molestiae maxime pariatur blanditiis.</p>
                    <img src="img/hombre.jpg" class="clientes__img">
                </div>
                <div class="clientes__columna">
                    <h3>Lidia Navarrete</h3>
                    <p class="clientes__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vel harum iste quasi molestias neque hic aperiam eaque voluptas cum oiewfjwoefi wefifewoi efwifenoewf feiwef fenwfwnfwnffn.</p>
                    <img src="img/abuelita.jpg" class="clientes__img">
                </div>
            </div>
        </section>
        
        <section class="registro">
            <div class="contenedor">
                <h2 class="registro__titulo">¡Ingresa tus datos para mas informacion!</h2>
                <form action="index.php" method="POST" class="registro__form" onsubmit="return validar();">
                    <ul>
                        <li>
                            <label for="nombree" class="registro__label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="registro__input" autocomplete="off" >
                        </li>
                        <li>
                            <label for="apellidooo" class="registro__label">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="registro__input" autocomplete="off" > 
                        </li>
                        <li>
                            <label for="correoo" class="registro__label">Correo electronico</label>
                            <input type="text" id="correo" name="correo" class="registro__input" autocomplete="off" >
                        </li>
                        <li>
                            <label for="telefonoo" class="registro__label">Telefono</label>
                            <input type="text" id="telefono" name="telefono" class="registro__input" autocomplete="off" >
                        </li>
                    </ul>
                    <div>
                        <button type="submit" class="registro__boton">¡Quiero obtener informacion!</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="contactos">
        <h2 class="contactos__titulo">Medios de contactos</h2>
        <p class="contactos__txt">Puedes comunicarte con nosostros de la siguiente manera</p>
        <div class="contactos__info">
            <h4>Telefono</h4>
            <p class="contacto__comu">+569 1331 3269</p>
        </div>
        <div class="contactos__info">
            <h4>Correo electronico</h4>
            <p class="contacto__comu">petvet@gmail.com</p>
        </div>
        <div class="contactos___info">
            <h4>Localizacion</h4>
            <img src="img/ubicacion.jpeg" class="contactos__img">
        </div>
    </footer>
    <script src="js/menu.js"></script>
    
</body>

</html> 