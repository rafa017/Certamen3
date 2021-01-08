<?php  
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /php_login_database');
}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if(count($results) > 00 && password_verify($_POST['password'], $results['password'])){
        $_SESSION['user_id'] = $results['id'];
        header('Location: /php_login_database');
    }else {
        $message = 'lo sentimos estas datos no existen';
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href = "https://fonts.googleapis.com/css2? family = Roboto & display = swap" rel = "hoja de estilo ">
    <link rel="stylesheet" href="formatos/css/style.css">
</head>
<body>

    <h1>Login</h1>
    <span>or <a href="registrarse.php">Registrarse</a></span>

    <?php if (!empty($message)) : ?>
        <p><?= $message ?></p>
    <?php endif;?>

    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingresa tu email">
        <input type="password" name="password" placeholder="Ingresa tu contraseña" >
        <input type="submit" value="send">

    </form>
    
</body>
</html>
