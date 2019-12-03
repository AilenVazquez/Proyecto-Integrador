<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("Partes/head.html") ?>
  </head>

  <body class="login">
    <header>
      <?php include("Partes/header.html") ?>
    </header>

    <section class="caja_login">
      <img class= "avatar" src="img/images.jpg" alt="logo Login">
      <h1>Ingrese sus datos</h1>
      <form >
        <!-- Usuario -->
        <label for="Usuario">Usuario</label>
        <input type="text" name="usuario" value="" placeholder="Ingrese Usuario">
        <!-- para el password -->
        <label for="Password">Contraseña</label>
        <input type="password" name="password" value="" placeholder="Ingrese Contraseña">

        <input type="submit" name="enviar" value="ingresar">

        <a href="#">Olvido su contraseña?</a><br>
        <a href="#">Crear cuenta</a>
      </form>
    </section>

    <footer>
      <?php include("Partes/head.html") ?>
    </footer>

  </body>
</html>
