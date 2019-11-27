<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>ISTIC Estacionamiento</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/floating-labels.css" rel="stylesheet">

  </head>
  <style>
        html,body
        {
          margin: 0;
          
        }
       main
       {
        background-image: url(https://www.eldiariodechihuahua.mx/v6/media/uploads/galeria/2019/09/10/20190910024022389-0-1560575.jpg);
        width: 100%;
        height:100%;


       }
       h2
       {
        color: black;
       }
       

  </style>


  <body >

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">

                              <!--<img id="estirada" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%" src="https://us.cdn.eltribuno.com/072016/1487243186771.jpg" />-->
         
                             <!--<div align="center"><img src="https://us.cdn.eltribuno.com/072016/1487243186771.jpg" width=100 height=100></div><br>-->

                              <form class="form-signin" action="../funciones/hacervehiculo.php">
                              
                              <h1 class="h3 mb-3 font-weight-normal"><h2>Ingrese patente del vehiculo</h2>
                              <label for="inputEmail" class="sr-only">Patente</label>
                              <input type="text" id="patente"  name="patente" pattern="([A-ZÑ]{3}\d{3}|[A-ZÑ]{2}\d{3}[A-ZÑ]{2})$" class="form-control" placeholder="AAA111 o AA123AA" required autofocus>
                             
                              
                              <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>-->

                              <button class="image" type="submit"><img src="http://testingchile.cl/w3/wp-content/uploads/2015/07/mercadolibre-ingresar.png" width="250" height="60"></button>
                              
                              </form>
                            

    </main>
      
     <footer class="footer">
    <?php
        include "../componentes/pie.php";
    ?>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
