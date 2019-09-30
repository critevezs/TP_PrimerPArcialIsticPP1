<?php
 
 $horaVehiculosalida = time(); 
 date_default_timezone_set('America/Argentina/Buenos_Aires');
 $horaVehiculoSalida = date ("H:i", $horaVehiculosalida);
 $patente2 = $_GET['patente'];
 $horaVehiculosalida = $horaVehiculosalida;


 $archivo = fopen('vehiculos.txt', 'r');

while(!feof ($archivo))
{
	$objeto = json_decode(fgets($archivo));

    if ($objeto->patente == $patente2)
    {
        header("Location: ok.php");
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


 

$hora = $horaVehiculo;
list($horas, $minutos, $segundos) = explode(':', $hora);
$hora_en_segundos = ($horas * 3600 ) + ($minutos * 60 ) + $segundos;
echo $hora_en_segundos; 

$hora2 = $horaVehiculoSalida;
list($horas, $minutos, $segundos) = explode(':', $hora);
$hora_en_segundos = ($horas * 3600 ) + ($minutos * 60 ) + $segundos;
echo $hora_en_segundos; 















?>






