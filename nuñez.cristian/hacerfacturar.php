<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
$horaSalida = mktime();
 
$patente2 = $_GET['patente'];
 
 $precio=5;

$archivo = fopen('vehiculos.txt', 'r');

while(!feof ($archivo))
{
	$objeto = json_decode(fgets($archivo));

    if ($objeto->patente == $patente2)
    {
    	$tiempo = $objeto->$horaEntrada - $horaSalida;

    	$hora = $tiempo;
        list($horas, $minutos,) = explode(':', $hora);
        $hora_en_segundos = ($horas * 3600 ) + ($minutos * 60 );
        echo $tiempoPagar

        $pagar = $tiempoPagar * $precio;

    	header("Location: pagar.php");
		fclose($archivo);
		exit();
	}
	else
	{
		header("Location: no.php");
		fclose($archivo);
		exit();
	}
     
}

exit();
fclose($archivo);

?>






