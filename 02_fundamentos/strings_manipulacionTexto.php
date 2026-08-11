<?php

//1. Comillas simples
//El contenido se toma de forma literal. No interpreta variables ni secuencia de escape.

$nombre = 'Angel';

echo 'Hola $nombre';// mostrara Hola $nombre

//2. Comillas dobles
//Interpreta variables y secuencias de escape como \n, \t, \r, etc.

echo "\nHola $nombre"; //mostrara Hola Angel

// Sintaxis con llaves para claridad
echo "\nUsuario: \t{$nombre}\n";
 
// Útil para acceder a arrays u objetos
$user = ["name" => "Ana"];
echo "\nHola, {$user['name']}\n"; // Hola, Ana

/*
SECUENCIAS DE ESCAPE
\n - salto de línea
\t - tabulacion
\r - retorno de carro
\\ - barra invertida
\$ - simbolo de dolar
\" - comillas dobles
 */


//CONCATENACION
$nombre = "Daniel";
$apellido = "RH";

$nombreCompleto = $nombre . " " . $apellido;//concatenar con punto . 

echo $nombreCompleto; //mostrara Daniel RH


//FUNCIONES ESENCIALES

//Longitud y acceso


$texto = 'Hola mundo';
echo "\nLongitud: ". strlen($texto);//obtenemos la longitud de la cadena

echo "\nPrimer caracter: ". $texto[0]; //accedemos al primer caracter

echo "\nUltimo caracter: ". $texto[strlen($texto) - 1]; //accedemos al ultimo caracter

echo "\nCantidad de palabras:". str_word_count($texto); //contamos la cantidad de palabras 


//LIMPIAR ESPACIOS EN BLANCO
$texto = " Hola devs ";
echo trim($texto);    // "Hola Mundo" (ambos lados)
echo ltrim($texto);   // "Hola Mundo   " (solo izquierda)
echo rtrim($texto);   // "   Hola Mundo" (solo derecha)

//Quitar caracteres especificos
$ruta = "/php/curso/ejercicios/";
echo trim($ruta, "/"); // "php/curso/ejercicios" (quita las barras al inicio y final)  

