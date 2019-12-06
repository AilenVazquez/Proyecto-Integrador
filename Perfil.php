<?php
 require_once("Partes/usuario.php");
 if (isset($userActivo)) {
   $usuariosGuardados = file_get_contents('usuarios.json');
   $arrayUsuarios = explode(PHP_EOL, $usuariosGuardados);
   array_pop($arrayUsuarios);
   foreach($arrayUsuarios as $usuarioJson) {
       $userFinal = json_decode($usuarioJson, true);

       if($userActivo == $userFinal['username']) {
         $nombre = $userFinal['nombre'];
         $username = $userFinal ['username'];
         $email = $userFinal['email'];
         $telefono = $userFinal['telefono'];
         $direccion = $userFinal['address'];
         $ciudad = $userFinal['city'];
         $postal= $userFinal['postal'];
         $imagen= $userFinal['imagen'];

       }
   }
 } else header('Location: Login.php');
  exit;
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Perfil</title>
    <?php include("Partes/head.php") ?>
  </head>

  <body id="index">
    <header>
      <?php include("Partes/header.php") ?>
    </header>

    <section>
      <article class="titulo">
        Perfil del Usuario
      </article>

      <div class="usuario">
        <center>
          <img class="usuario" src="img\<?= $imagen ?>" alt="">
        </center>
      </div>

      <div class="usuario1">
        <br>
        <article class="">
          <strong>Nombre:</strong> <?= $nombre ?>
        </article>
        <br>
        <article class="">
          <strong>Usuario:</strong> <?= $username ?>
        </article>
        <br>
        <article class="">
          <strong>Email:</strong> <?= $email ?>
        </article>
        <br>
        <article class="">
          <strong>Telefono:</strong> <?= $telefono ?>
        </article>
        <br>
        <article class="">
          <strong>Direccion:</strong> <?= $direccion ?>
        </article>
        <br>
        <article class="">
          <strong>Ciudad:</strong> <?= $ciudad ?>
        </article>
        <br>
        <article class="">
          <strong>Codigo Postal:</strong> <?= $postal ?>
        </article>

        <br>
      </div>
    </section>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>
  </body>
</html>
