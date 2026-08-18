<?php

/*
Ejercicio 1: Clasificar edad
Dada una variable $edad con valor 15, determina si la persona es "menor de edad" (menos de 18) o "mayor de edad" (18 o mas). Imprime el resultado.
*/

$edad = 15;

if ($edad < 18) {
    echo "Eres menor de edad";
} else {
    echo "Eres mayor de edad";
}

/*
Ejercicio 2: Calificacion por nota
Dada una variable $nota con valor 85, asigna una calificacion segun: 90-100 = "Sobresaliente", 
70-89 = "Notable", 50-69 = "Aprobado", menos de 50 = "Suspenso".
*/
echo "\n ";


$nota = 49;

if ($nota >= 90) {
    echo "SOBRESALIENTE";
} elseif ($nota >= 70) {
    echo "NOTABLE";
} elseif ($nota >= 50) {
    echo "APROBADO";
} else {
    echo "SUSPENDIDO";
}

/*
Ejercicio 3: Acceso con multiples condiciones
Tienes $edad = 25, $tieneCuenta = true y $estaVerificado = false.
 Determina si el usuario puede acceder (debe ser mayor de 18, tener cuenta Y estar verificado).
 */
echo "\n";
$edad = 25;
$tieneCuenta = true;
$estaVerificado = true;

if ($edad > 18 && $tieneCuenta && $estaVerificado) {
    echo "Puede acceder";
} else {
    echo "No puede acceder";
}