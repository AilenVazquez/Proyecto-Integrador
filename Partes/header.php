<nav class="nav-header">
  <div class="headerHome">
    <ul class="ulHeader">
      <li>
        <a href="http://localhost/Proyecto-Integrador/Home.php"><h1> HOME</h1></a>
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
    <?php if (isset($userActivo)): ?>
      <ul>
        <li>
          <a href="http://localhost/Proyecto-Integrador/carrito.php"><i class="fas fa-shopping-cart"></i></a>
        </li>
      </ul>

      <form class="boton-salir" action="logout.php" method="post">
        <label for=""><a href="http://localhost/Proyecto-Integrador/Perfil.php"><?= $userActivo ?></a></label>

        <button type="submit" name="salir">Cerrar sesion</button>
      </form>

    <?php else: ?>
      <ul>

        <li>
          <a href="http://localhost/Proyecto-Integrador/Registro.php">Creá tu cuenta /</a>
        </li>
        <li>
          <a href="http://localhost/Proyecto-Integrador/Login.php">Ingresá /</a>
        </li>
        <li>
          <a href="http://localhost/Proyecto-Integrador/Perfil.php">Perfil / </a>
        </li>
        <li>
          <a href="http://localhost/Proyecto-Integrador/carrito.php"><i class="fas fa-shopping-cart"></i></a>
        </li>

      </ul>
    <?php endif; ?>

  </div>
</nav>
