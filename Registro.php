<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include("Partes/head.html") ?>
  </head>

  <body class="Registro">
      <header>
        <?php include("Partes/header.html") ?>
      </header>

      <section class="form-registro">
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombres</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Nombres">
            </div>

            <div class="form-group col-md-6">
              <label for="inputPassword4">Apellidos</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="Apellidos">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="email@gmail.com">
            </div>

            <div class="form-group col-md-6">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
            </div>
          </div>

          <div class="form-group">
            <label for="inputAddress">Direccion</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Ciudad</label>
              <input type="text" class="form-control" id="inputCity" placeholder="Ciudad">
            </div>

            <div class="form-group col-md-4">
              <label for="inputState">Pais</label>
              <select id="inputState" class="form-control">
                <option selected>Paises</option>
                <option value="Ar">Argentina</option>
                <option value="Bo">Bolivia</option>
                <option value="Br">Brasil</option>
                <option value="Ch">Chile</option>
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="inputZip">Codigo postal</label>
              <input type="text" class="form-control" id="inputZip" placeholder="A1234">
            </div>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Recuerdame
            </label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Registrarme</button>
        </form>
      </section>

      <footer>
        <?php include("Partes/head.html") ?>
      </footer>
  </body>
</html>
