<?php
 $miObjeto2 = new stdClass();
  
 
 $miObjeto2->patente = $_GET['patente'];
 $miObjeto2->horaIngreso = $_GET["hora"];
 
 $archivo = fopen('vehiculos.txt', 'a');
 fwrite($archivo, json_encode($miObjeto2)."\n");
 fclose($archivo);
 header("Location: ok.php");

?>