<?php
require_once("Partes/usuario.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Preguntas Frecuentes</title>
     <?php include("Partes/head.php") ?>
  </head>

  <body id="index">
    <header>
      <?php include("Partes/header.php") ?>
    </header>

    <section>
      <article class="titulo">
        <center>
          <h1>Preguntas Frecuentes</h1>
        </center>
      </article>

      <article class="preguntas">
        <a href="#" onclick="mostrar('divTexto1'); return false" />¿Cual es el minimo de compra?</a>
        <div id="divTexto1" style="visibility:hidden">
          El minimo de compre es de 3 productos.
        </div>

        <BR>

        <a href="#" onclick="mostrar('divTexto2'); return false" />¿Los precios incluyen IVA?</a>
        <div id="divTexto2" style="visibility:hidden">
          El minimo de compre es de 3 productos.No, los precios no incluyen IVA
        </div>

        <BR>

        <a href="#" onclick="mostrar('divTexto3'); return false" />Ya hice mi compra, ¿Como sigue el proceso?</a>
        <div id="divTexto3" style="visibility:hidden">
          Una ves finalizada tu compra, vas a recibir un mail de confirmacion por la misma donde coordinaremos el envio de la mercaderia.
        </div>

        <BR>

        <a href="#" onclick="mostrar('divTexto4'); return false" />¿Cual es el método de pago?</a>
        <div id="divTexto4" style="visibility:hidden">
          El pago puede realizarse mediante transferencia ó depósito bancario.
        </div>

        <BR>

        <a href="#" onclick="mostrar('divTexto5'); return false" />¿Cómo me envían la mercadería?</a>
        <div id="divTexto5" style="visibility:hidden">
          Puede ser mediante Correo Argentino, expreso o a convenir.
        </div>
      </article>




      <?php /* <div class="conteiner">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="numero"> 1 </div>
            <article class="pregunta"> </article>
            <article class="respuesta"></article>
          </li>

          <li class="list-group-item">
            <div class="numero"> 2 </div>
            <article class="pregunta"></article>
            <article class="respuesta"></article>
          </li>

          <li class="list-group-item">
            <div class="numero"> 3 </div>
            <article class="pregunta"></article>
            <article class="respuesta"></article>
          </li>

          <li class="list-group-item">
            <div class="numero"> 4 </div>
            <article class="pregunta"></article>
            <article class="respuesta"></article>
          </li>

          <li class="list-group-item">
            <div class="numero"> 5 </div>
            <article class="pregunta"></article>
            <article class="respuesta"></article>
          </li>
        </ul> */?>
      </div>
    </section>

    <footer>
      <?php include("Partes/footer.php") ?>
    </footer>
  </body>
</html>
