<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nombre'])) {
    $sql = "INSERT INTO users (email, password, nombre) VALUES (:email, :password, :nombre)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':nombre', $_POST['nombre']);
  
    if ($stmt->execute()) {
      $message = 'Nueva cuenta ha sido creada';
    } else {
      $message = 'Ha ocurrido un problema';
    }
  } 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/asas/assets/css/style2.css">
  </head>
  <body  >
  

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
<div class="formulario" >
     <h1>Registrar Cuenta</h1>
    <span>o <a href="login.php">Iniciar sesión</a></span>

    <form action="signup.php" method="POST">
      <input type="text" name="nombre" required placeholder="Nombre">
      <input name="email" type="text" placeholder="Email" required>
      <input name="password" type="password" placeholder="Contraseña"required>
      <input name="confirm_password" type="password" placeholder="Confirmar Contraseña"required>
      <input type="submit" value="Submit">
    </form>
 </div>
  </body>
</html>
