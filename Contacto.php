<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Registro</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/bd6ea66bd2.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/master.css">
</head>
  <body class="contacto">
    <header>
      <nav class="nav-header">
        <div class="home">
          <ul>
            <li>
              <a href="http://localhost/Proyecto-Integrador/Home.php">Home</a>
            </li>
          </ul>
        </div>
        <div class="buscador">
          <ul>
            <li>
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Busca productos" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
            </li>
          </ul>
        </div>
        <div class="otros">
          <ul>
            <li>
              <a href="http://localhost/Proyecto-Integrador/Registro.php">Creá tu cuenta/</a>
            </li>
            <li>
              <a href="http://localhost/Proyecto-Integrador/Login.php">Ingresá/</a>
            </li>
            <li>
              <a href="">Perfil/</a>
            </li>
            <li>
              <a href=""><i class="fas fa-shopping-cart"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="caja_contacto">
      <form >
        <h2>CONTACTO</h2>
        <input type="text" name="nombre" value="" placeholder="Nombre">
        <input type="email" name="correo" value="" placeholder="E-mail">
        <input type="text" name="telefono" value="" placeholder="Teléfono">
        <textarea name="mensaje"  placeholder="Escriba aqui su mensaje"></textarea>
        <input type="button" name="enviar" value="ENVIAR" id="boton">
      </form>
    </div>

    <footer>
      <div class="">
        <ul>
          <li>
            <a href="http://localhost/Proyecto-Integrador/Contacto.php">Contactanos</a>
          </li>
          <li>
            <a href="">Preguntas frecuentes</a>
          </li>
        </ul>
      </div>
    </footer>

  </body>
</html>
