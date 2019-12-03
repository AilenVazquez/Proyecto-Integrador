<?php

require_once("Partes/usuario.php");
if($_SESSION){
  header('Location: bienvenido.php');
  exit;
}

function validarRegistracion($unArray) {

    $errores = [];

    // Validamos campo "nombre"
    if( isset($unArray['nombre']) ) {
        if( empty($unArray['nombre']) ) {
            $errores['nombre'] = "Este campo debe completarse.";
        }
        elseif( strlen($unArray['nombre']) < 2 ) {
            $errores['nombre'] = "Tu Nombre debe tener al menos 2 caracteres.";
        }
    }
    if( isset($unArray['username']) ) {
        if( empty($unArray['username']) ) {
            $errores['username'] = "Este campo debe completarse.";
        }
        elseif( strlen($unArray['username']) < 2 ) {
            $errores['username'] = "Tu Usuario debe tener al menos 2 caracteres.";
        }
    }

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
    if( isset($unArray['address']) ) {
        if( empty($unArray['address']) ) {
            $errores['address'] = "Este campo debe completarse.";
        }
    }
    if( isset($unArray['city']) ) {
        if( empty($unArray['city']) ) {
            $errores['city'] = "Este campo debe completarse.";
        }
    }
    if( isset($unArray['state']) ) {
        if( $unArray['state']== "Paises" ) {
            $errores['state'] = "Este campo debe completarse.";
        }
    }
    if( isset($unArray['postal']) ) {
        if( empty($unArray['postal']) ) {
            $errores['postal'] = "Este campo debe completarse.";
        }
        elseif( strlen($unArray['postal']) != 4 ) {
            $errores['postal'] = "Tu codigo postal es erroneo";
        }
    }
    if ($_FILES) {
      if ($_FILES["img"]["error"] != 0) {
        $errores[] = "Hubo un error al cargar la imagen <br>";
      }
      else{
        $ext = pathinfo($_FILES["img"]["name"],PATHINFO_EXTENSION);

        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
          $errores[] = "La imagen debe ser jpg, jpeg o png <br>";
        }

      }


    }
    return $errores;
}

if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    if(count($arrayDeErrores) === 0) {
        // REGISTRO AL USUARIO
        $usuarioFinal = [
            'nombre' => trim($_POST['nombre']),
            'username' => trim($_POST['username']),
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'address' => $_POST['address'],
            'city' => $_POST['city'],
            'postal' => $_POST['postal']

        ];
        $ext = pathinfo($_FILES["img"]["name"],PATHINFO_EXTENSION);
        $nombreFoto = "foto " . $usuarioFinal["nombre"] . "." . $ext;
        move_uploaded_file($_FILES["img"]["tmp_name"], "img/".$nombreFoto);
        $usuarioFinal["imagen"] = $nombreFoto;

        // ENVIAR A LA BASE DE DATOS $usuarioFinal
        $jsonDeUsuario = json_encode($usuarioFinal);
        file_put_contents('usuarios.json', $jsonDeUsuario . PHP_EOL, FILE_APPEND);
        if(isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {

            setcookie('username', $usuarioFinal['username'], time() + 60 * 60 * 24 * 7);
            setcookie('userPass', $usuarioFinal['password'], time() + 60 * 60 * 24 * 7);
            header('Location: bienvenido.php');
            exit;
        }
        header('Location: Login.php');
        exit;
    }
}

 ?>

















<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Registro</title>
    <?php include("Partes/head.php") ?>
  </head>

  <body class="Registro">
      <header>
        <?php include("Partes/header.php") ?>
      </header>

      <section class="form-registro">

        <form action="Registro.php" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombre">Nombre Completo</label>
              <input type="text" class="form-control" id="nombre" name="nombre"placeholder="Nombres">
              <small class="text-danger"><?= isset($arrayDeErrores['nombre']) ? $arrayDeErrores['nombre'] : "" ?></small>
            </div>
            <div class="form-group col-md-6">
              <label for="username">Usuario</label>
              <input type="text" class="form-control" id="username" name="username"placeholder="Usuario">
              <small class="text-danger"><?= isset($arrayDeErrores['username']) ? $arrayDeErrores['username'] : "" ?></small>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@gmail.com">
              <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
            </div>
            <div class="form-group col-md-6">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
              <small class="text-danger"><?= isset($arrayDeErrores['password']) ? $arrayDeErrores['password'] : "" ?></small>
            </div>
          </div>
          <div class="form-group">
            <label for="address">Direccion</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
            <small class="text-danger"><?= isset($arrayDeErrores['address']) ? $arrayDeErrores['address'] : "" ?></small>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="city">Ciudad</label>
              <input type="text" class="form-control" id="city" name="city" placeholder="Ciudad">
              <small class="text-danger"><?= isset($arrayDeErrores['city']) ? $arrayDeErrores['city'] : "" ?></small>
            </div>
            <div class="form-group col-md-4">
              <label for="state">Pais</label>
              <select id="state" name="state" class="form-control">
                <option selected>Paises</option>
                <option value="Ar">Argentina</option>
                <option value="Bo">Bolivia</option>
                <option value="Br">Brasil</option>
                <option value="Ch">Chile</option>
              </select>
              <small class="text-danger"><?= isset($arrayDeErrores['state']) ? $arrayDeErrores['state'] : "" ?></small>
            </div>
            <div class="form-group col-md-2">
              <label for="postal">Codigo postal</label>
              <input type="text" class="form-control" id="postal" name="postal" placeholder="1234">
              <small class="text-danger"><?= isset($arrayDeErrores['postal']) ? $arrayDeErrores['postal'] : "" ?></small>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" name="recordarme">
              <label class="form-check-label" for="gridCheck">
                Recuerdame
            </label>
            </div>
          </div>
          <div class="container">
              <label for="img">Foto de perfil:</label> <br>
              <input type="file" name="img" value="">
          </div>
          <button type="submit" class="btn btn-primary">Registrarme</button>
        </form>
      </section>

      <footer>
        <?php include("Partes/footer.php") ?>
      </footer>
  </body>
</html>
