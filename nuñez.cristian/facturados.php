<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>ESTACIONAMIENTO LOW RIDER</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Low Rider</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="registro.php">REGISTRARSE <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">INICIAR SESION <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="cargarvehiculo.php">CARGA DE VEHICULOS <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="facturar.php">FACTURAR <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="facturados.php">FACTURADOS <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">

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
    }

    </style>



<table style="width:100%">

       <tr>
            <th>Vehiculo</th>
            <th>Fecha/Hora Ingreso</th>
            <th>Fecha/Hora Salida</th>
            <th>Total Cobrado</th>
          </tr>


      
<?php

  $totalFacturado = 0;
  date_default_timezone_set('America/Argentina/Buenos_Aires');



    $archivo = fopen("facturados.txt", "r");
    while(!feof($archivo)) 
    {
      $objeto = json_decode(fgets($archivo));
      if ($objeto != "") 
      {
        echo "<tr>";
          echo "<td>".$objeto->Vehiculo."</td>   <td>".$objeto->fechaEntrada."</td>   <td>".$objeto->fechaSalida."</td>   <td>".$objeto->importe."</td>";
        echo "</tr>";
        echo "</table>";


        $totalFacturado = $totalFacturado + $objeto->importe;
      }
    }

    echo "<h2> TOTAL FACTURADO: $".$totalFacturado."</h2>";
    fclose($archivo);
  ?>
      
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted"><iframe src="http://free.timeanddate.com/clock/i6y30msv/n51/tles4/fs30/tcf90/pc9f0/ftbi/bo2/th2" frameborder="0" width="178" height="38"></iframe>
.</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
