<?php

/*
programa en PHP que nos convierta una cantidad de tiempo en segundos ingresada por un usuario a horas, minutos y segundos.
*/

//SOLICITAMOS LOS DATOS

$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = $segundos / 3600;

$minutos = ($segundos % 3600) / 60;

$segundos = ($segundos % 3600) % 60;

$horas = intval($horas);
$minutos = intval($minutos);

echo "Los segundos ingresados son igual a: $horas horas, $minutos minutos, $segundos segundos\n";

echo "\n*****************************************************************************\n";

$horas = readline("\nIngresa la horas: ");

$minutos = readline("Ingresa los minutos: ");

$segundos = readline("Ingresa los segundos: ");

$total_segundos = ($horas * 3600) + ($minutos * 60) + $segundos;

echo "$horas horas, $minutos minutos y $segundos segundos son: $total_segundos segundos";