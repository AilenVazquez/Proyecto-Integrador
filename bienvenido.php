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
    <title>Bienvenida</title>
    <?php include("Partes/head.php") ?>
  </head>

  <body class="bienvenido">
    <header>
      <?php include("Partes/header.php") ?>
    </header>

    <section>
      <article class="">
        <main>
          <h1>Bienvenido <?=$_SESSION["nombre"]?>!</h1>
        </main>
      </article>
    </section>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>
  </body>

</html>
