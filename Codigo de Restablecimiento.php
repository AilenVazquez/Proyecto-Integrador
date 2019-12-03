<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Restablecimiento de contraseña</title>
    <?php include("Partes/head.php") ?>
  </head>

  <body class="rest">
    <header>
      <?php include("Partes/header.php") ?>
    </header>

    <section class="caja_rest">
      <img class= "avatar" src="img/images.jpg" alt="logo Login">
      <h1>Revisa tu correo Electronico</h1>
      <h2>Hemos enviado un código por mensaje de texto al correo seleccionado. Una vez recibas el código, introdúcelo abajo para restablecer tu contraseña.</h2>
      <form action="login.php" method="post">
        <!-- Usuario -->
        <input type="text" name="text" value="" placeholder="Ingresar Código">
        <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
        <input type="submit" name=" " value="Enviar">
      </form>
    </section>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>

  </body>
</html>
