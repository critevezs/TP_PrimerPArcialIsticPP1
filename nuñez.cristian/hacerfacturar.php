<?php

$precio=5;


 
$patente2 = $_GET['patente'];
$horaSalida = $_GET["horaSalida"];
 
 


$archivo = fopen('vehiculos.txt', 'r');

while(!feof ($archivo))
{
	$objeto = json_decode(fgets($archivo));

    

    if ($objeto->patente == $patente2)
    {
    	$tiempo = $horaSalida - $objeto->horaIngreso;

    

        $cobrar = $tiempo * $precio;

    	header("Location: pagar.php? &cobrar=".$cobrar."&ingreso=".$objeto->horaIngreso."&salida=".$horaSalida."&patente=".$patente2);
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






