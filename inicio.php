z<?php 
session_start();
require 'php_login_database';
if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id =:id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $records = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;
    if (count($results) >0) {
        $user = $results;
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href = "https://fonts.googleapis.com/css2? family = Roboto & display = swap" rel = "hoja de estilo ">
    <link rel="stylesheet" href="formatos/css/style.css">
</head>
<body>

<header>
    <a href="usuarioLogin">Inicio</a>
</header>

<?php if(!empty($user)):  ?>
<br>Bienvenido <?= $user['email'] ?>
<br>Se a completado el logeo 
<a href="logout.php">Logeado</a>
<?php else: ?>

    <h1>Porfavor inicia sesion o registrate</h1>
    <a href="login.php">Login</a> or
    <a href="registrarse.php">Registrarse</a>
<?php endif; ?>
</body>
</html>
