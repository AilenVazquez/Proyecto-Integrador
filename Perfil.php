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
         $email = $userFinal['email'];
         $ciudad = $userFinal['city'];
         $direccion = $userFinal['address'];
         $postal= $userFinal['postal'];
         $imagen= $userFinal['imagen'];

       }
   }
 }
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
          <strong>Nombre: <?= $nombre ?></strong>
        </article>
        <br>
        <article class="">
          Email: <?= $email ?>
        </article>
        <br>
        <article class="">
          Direccion: <?= $direccion ?>
        </article>
        <br>
        <article class="">
          Ciudad: <?= $ciudad ?>
        </article>
        <br>
        <article class="">
          Codigo Postal: <?= $postal ?>
        </article>

        <br>
      </div>
    </section>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>
  </body>
</html>
