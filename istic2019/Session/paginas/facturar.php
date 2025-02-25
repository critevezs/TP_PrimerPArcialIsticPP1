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
    <link rel="icon" href="../../../../favicon.ico">

    <title>Lowraider</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/floating-labels.css" rel="stylesheet">

  </head>

  <style>
   
    th 
    {
      color:black;
      background-color: lightblue;
    }
    td {color:black;}
    table,th,td 
    {
     border: 3px solid black;
    text-align: center;
    font-family:Comic Sans MS;
    }

    body
      {
      background: url(https://www.eldiariodechihuahua.mx/v6/media/uploads/galeria/2019/09/10/20190910024022389-0-1560575.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      height: 90%;

      }

      footer
      {
        height: 10%;
       font-family:Comic Sans MS;
      }

      h2
       {
        color: black;
        font-family:Comic Sans MS;
       }

    </style>

  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">

      <div class="row">

     <div class="col-sm-4">
        
     <!--<div align="center"><img src="https://us.cdn.eltribuno.com/072016/1487243186771.jpg" width=100 height=100></div><br>-->

     <form class="form-signin" action="../funciones/hacerfacturar.php">
                              
     <h1 class="h3 mb-3 font-weight-normal"><h2>Facturar Vehiculo</h2></h1>
     <label for="inputEmail" class="sr-only">Patente</label>
     <input type="text" id="patente"  name="patente" pattern="([A-ZÑ]{3}\d{3}|[A-ZÑ]{2}\d{3}[A-ZÑ]{2})$" class="form-control" placeholder="AAA111 o AA123AA" required autofocus>

      <button class="image" type="submit"><img src="https://lowesfacturacion.cfdinova.com.mx/KPortalExterno/lowes-img/Btn-Facturar02.png" width="250" height="60"></button>
                             
     <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Facturar</button>-->
                              
     </form>

    </div>

    <div class="col-sm-8">

      <table style="width:100%">

       <tr>
            <th>Vehiculo</th>
            <th>Fecha/Hora Ingreso</th>
            
          </tr>


    <!--<form class="form-signin" action="../funciones/hacerBorradovehiculos.php">-->
    <?php

         include '../funciones/accesoadatos.php';

         $cantidadAutos=0;
         $totalFacturado = 0;
         date_default_timezone_set('America/Argentina/Buenos_Aires');

        

         $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
         $consulta =$objetoAccesoDato->RetornarConsulta("select id ,patente  , horaingreso  from registrovehiculo");
         $consulta->execute();     
         $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);

         foreach ($datos as $registrovehiculo)
         {
          echo "<tr>";
          echo "<td>".$registrovehiculo['patente']."</td>   <td>".$registrovehiculo['horaingreso']."</td> <td>".$registrovehiculo['id']."</td>";

          //echo "<input type='submit' name='hacer'  value='".$registrovehiculo['id']."'>borrar</input><br>";
         }

        echo "</table>";

         ?>

        </form>
        </div>
        </div>
      
         
                             
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
