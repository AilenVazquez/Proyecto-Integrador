<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Contacto</title>
    <?php include("Partes/head.html") ?>
  </head>

  <body class="contacto">
    <header>
      <?php include("Partes/header.html") ?>
    </header>

    <section class="caja_contacto">
      <form >
        <h2>CONTACTO</h2>
        <input type="text" name="nombre" value="" placeholder="Nombre">
        <input type="email" name="correo" value="" placeholder="E-mail">
        <input type="text" name="telefono" value="" placeholder="Teléfono">
        <textarea name="mensaje"  placeholder="Escriba aqui su mensaje"></textarea>
        <input type="button" name="enviar" value="ENVIAR" id="boton">
      </form>
    </section>

    <footer>
      <?php include("Partes/footer.html") ?>
    </footer>

  </body>
</html>
