<?php
require_once("Partes/usuario.php");

$productos = [
  [
    "Producto" => "Producto",
    "Precio" => "$7000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$3000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$200",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$10000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$13000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$8000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$5000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$20000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$60000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$5000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$20000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ],

  [
    "Producto" => "Producto",
    "Precio" => "$60000",
    "Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  ]
];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Home</title>
    <?php include("Partes/head.php") ?>
  </head>

  <body class="home">
    <header>
      <?php include("Partes/header.php") ?>
    </header>

    <section>
      <article class="row">
          <?php foreach ($productos as $key => $value): ?>
                <div class="col-6 col-sm-4 col-lg-3">
                  <center>
                    <img src="img/productos.jpg" alt="">
                    <h2><?=$value["Producto"]?></h2>
                    <h3><?=$value["Precio"]?></h3>
                    <p><?=$value["Descripcion"]?></p>
                  </center>
                </div>
          <?php endforeach; ?>
      </article>
    </section>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>
  </body>
</html>
