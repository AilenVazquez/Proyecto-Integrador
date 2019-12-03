<?php
 require_once("Partes/usuario.php");
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
        <img class="usuario" src="img\usuario.png" alt="">
      </div>

      <div class="usuario1">
        <br>
        <article class="">
          <strong>Nombre: Eduardo Sanches</strong>
        </article>
        <br>
        <article class="">
          Email: EduSanches@yahoo.com.ar
        </article>
        <br>
        <article class="">
          Direccion: Uruguay 270 Godoy Cruz
        </article>
        <br>
        <article class="">
          Ciudad: Mendoza
        </article>
        <br>
      </div>
    </section>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>
  </body>
</html>
