<?php
function validarRegistracion($unArray) {

    $errores = [];

    // Validamos campo "email"
    if( isset($unArray['email']) ) {
        if( empty($unArray['email']) ) {
            $errores['email'] = "Este campo debe completarse.";
        }
        elseif( !filter_var($unArray['email'], FILTER_VALIDATE_EMAIL) ) {
            $errores['email'] = "Debés ingresar un email válido.";
        }
    }
    return $errores;
    }
    if($_POST) {
        $arrayDeErrores = validarRegistracion($_POST);
        if(count($arrayDeErrores) === 0) {
    $usuariosGuardados = file_get_contents('usuarios.json');
    $arrayUsuarios = explode(PHP_EOL, $usuariosGuardados);
    array_pop($arrayUsuarios);
    foreach($arrayUsuarios as $usuarioJson) {
        $userFinal = json_decode($usuarioJson, true);

        if($_POST['email'] == $userFinal['email']) {
          echo "email correcto";
          header('Location: Codigo de Restablecimiento.php');
           exit;
      }
    }
  }
}
?>
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
      <h1>Restablecimiento de contraseña</h1>
      <form action="Restablecimiento de contraseña.php" method="post">
        <!-- Usuario -->
        <label for="Email">E-mail</label>
        <input type="email" name="email" value="" placeholder="Ingrese E-mail">
        <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
        <input type="submit" name=" " value="Buscar">
      </form>
    </section>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>

  </body>
</html>
