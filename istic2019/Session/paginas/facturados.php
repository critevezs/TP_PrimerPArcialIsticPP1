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

    </style>

  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
    



      <table style="width:100%">

       <tr>
            <th>Vehiculo</th>
            <th>Fecha/Hora Ingreso</th>
            <th>Fecha/Hora Salida</th>
            <th>Total Cobrado</th>
          </tr>



<?php

  include '../funciones/accesoadatos.php';

  $cantidadAutos=0;
  $totalFacturado = 0;
  date_default_timezone_set('America/Argentina/Buenos_Aires');



  $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
  $consulta =$objetoAccesoDato->RetornarConsulta("select id ,patente  , horaingreso, horasalida,importe  from vehiculosfacturados");
  $consulta->execute();     
  $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);

    //$archivo = fopen("../archivos/facturados.txt", "r");
    //while(!feof($archivo)) 

    foreach ($datos as $vehiculosfacturados)
    {
      //$objeto = json_decode(fgets($archivo));
      //if ($objeto != "") 
      //{
        //echo "<tr>";
        //echo "<td>".$objeto->Vehiculo."</td>   <td>".$objeto->fechaEntrada."</td>   <td>".$objeto->fechaSalida."</td>   <td>".$objeto->importe."</td>";
        //echo "</tr>";

      echo "<tr>";
        echo "<td>".$vehiculosfacturados['patente']."</td>   <td>".$vehiculosfacturados['horaingreso']."</td>   <td>".$vehiculosfacturados['horasalida']."</td>   <td>".$vehiculosfacturados['importe']."</td>";
        echo "</tr>";

        $totalFacturado = $totalFacturado + $vehiculosfacturados['importe'];
        $cantidadAutos = $cantidadAutos + 1;
        //$_SESSION['estacionados'] = $cantidadAutos;
      
    }
    echo "</table>";
 
    echo "<h2> TOTAL FACTURADO: $".$totalFacturado."</h2>";
    //fclose($archivo);
  ?>


    </main>
  </body>
      
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
