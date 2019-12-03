<?php
require_once("Partes/usuario.php");
if($_SESSION){
  header('Location: bienvenido.php');
  exit;
}
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

    if( isset($unArray['password']) ) {
        if( empty($unArray['password']) ) {
            $errores['password'] = "Este campo debe completarse.";
        }
        elseif( strlen($unArray['password']) < 6 ) {
            $errores['password'] = "Tu contraseña debe tener al menos 6 caracteres.";
        }
    }

    return $errores;
}

if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    if(count($arrayDeErrores) === 0) {
        // LOGUEO AL USUARIO
        $usuariosGuardados = file_get_contents('usuarios.json');
        $arrayUsuarios = explode(PHP_EOL, $usuariosGuardados);
        array_pop($arrayUsuarios);
        foreach($arrayUsuarios as $usuarioJson) {
            $userFinal = json_decode($usuarioJson, true);

            if($_POST['email'] == $userFinal['email']) {
              echo "email correcto";

                if(password_verify($_POST['password'], $userFinal['password'])) {
                  echo "login correcto";
                  $_SESSION['nombre'] = $userFinal['nombre'];
                  $_SESSION['email'] = $userFinal['email'];
                  $_SESSION['username'] = $userFinal['username'];
                  $_SESSION['imagen'] = $userFinal['imagen'];
                  if(isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {

                      setcookie('username', $userFinal['username'], time() + 60 * 60 * 24 * 7);
                      setcookie('userPass', $userFinal['password'], time() + 60 * 60 * 24 * 7);
                  }
                  header('Location: bienvenido.php');
                  exit;
                }
            }
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Login</title>
    <?php include("Partes/head.php") ?>
  </head>

  <body class="login">
    <header>
      <?php include("Partes/header.php") ?>
    </header>

    <section class="caja_login">
      <img class= "avatar" src="img/images.jpg" alt="logo Login">
      <h1>Ingrese sus datos</h1>
      <form action="login.php" method="post">
        <!-- Usuario -->
        <label for="Email">E-mail</label>
        <input type="email" name="email" value="" placeholder="Ingrese E-mail">
        <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
        <!-- para el password -->
        <label for="Password">Contraseña</label>
        <input type="password" name="password" value="" placeholder="Ingrese Contraseña">
        <small class="text-danger"><?= isset($arrayDeErrores['password']) ? $arrayDeErrores['password'] : "" ?></small>

        <input type="submit" name=" " value="ingresar">
        <div class="recordarme">
          <label  for="gridCheck">  Recuerdame
          </label>
          <input  type="checkbox" id="gridCheck" name="recordarme">
        </div>
        <a href="#">Olvido su contraseña?</a><br>
        <a href="Registro.php">Crear cuenta</a>
      </form>
    </section>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>

  </body>
</html>
