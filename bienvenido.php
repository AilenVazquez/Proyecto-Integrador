<?php

require_once("Partes/usuario.php");

if($_SESSION){
  $nombre= $_SESSION["nombre"];
  $email= $_SESSION["email"];
  $username= $_SESSION["username"];
  $imagen="imagenes/".$_SESSION["imagen"];
} else {
  header('Location: Login.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bienvenido</title>
    <?php include("Partes/head.php") ?>
  </head>

  <body class="bienvenido">
    <header>
      <?php include("Partes/header.php") ?>
    </header>

    <main>
      <h1>Bienvenido</h1>
    </main>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>
  </body>

</html>
