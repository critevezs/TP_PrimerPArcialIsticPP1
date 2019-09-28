<?php
 $miObjeto = new stdClass();
 $horaVehiculo = time(); 
 date_default_timezone_set('America/Argentina/Buenos_Aires');
 $horaVehiculo = date ("H:i", $horaVehiculo);
 $miObjeto->patente = $_GET['patente'];
 $miObjeto->horaVehiculo = $horaVehiculo;
 $archivo = fopen('vehiculos.txt', 'a');
 fwrite($archivo, json_encode($miObjeto)."\n");
 fclose($archivo);
 header("Location: ok.php");

?>