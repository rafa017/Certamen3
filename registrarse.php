<?php 
    require 'database.php';

    $message = "";

    if(!empty($_POST['email']) && !empty($_POST['password '])){
        $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if($stmt->execute()){
            $message = 'Usuario registrado correctamente';
        }else{
            $message = 'Algo salio mal :c intntalo de nuevo';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "https://fonts.googleapis.com/css2? family = Roboto & display = swap" rel = "hoja de estilo ">
    <link rel="stylesheet" href="formatos/css/style.css">
</head>
<body>

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>    

    <h1>¡Registrate!</h1>
    <span>or <a href="login.php">Login</a></span>

    <form action="registrarse.php" method="post">
        <input type="text" name="email" placeholder="Ingresa tu email">
        <input type="password" name="password" placeholder="Ingresa tu contraseña" >
        <input type="password" name="confirmar_password" placeholder="Confirma tu contraseña" >
        <input type="submit" value="send">

    </form>
</body>
</html>