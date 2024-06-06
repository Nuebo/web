<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: /php-login');
}

require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nombre'])) {

  if (preg_match('/^[A-Za-z\s]+$/', $_POST['nombre'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if ($results !== false && is_array($results) && count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['nombre'] = $_POST['nombre']; 
      header("Location: Pagina.php");
    } else {
      $message = 'Error, Correo Electrónico o Contraseña son incorrectos';
    }
  } else {
    $message = 'Error, Nombre no válido. El nombre solo debe contener letras y espacios.';
  }
}





?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/asas/assets/css/style2.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
<div class="formulario" >
    <h1  >Iniciar Sesion</h1>
    <span>o <a href="signup.php"  >Registrarse</a></span>

    <form action="login.php" method="POST">
      <input type="text" name="nombre" required placeholder="Nombre">
      <input name="email" type="text" placeholder="Email" required>
      <input name="password" type="password" placeholder="Contraseña" required>
      <input type="submit" value="Submit">
    </form>
    </div>
  </body>
</html>
