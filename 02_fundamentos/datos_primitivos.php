<?php
/*
Tipos de Datos Primitivos
PHP es un lenguaje de tipado dinámico, pero eso no significa que no tenga tipos. Conocer los tipos de datos te ayudará a escribir código más robusto y evitar errores.

Los 8 tipos de datos en PHP
PHP tiene 8 tipos de datos primitivos, divididos en tres categorías:

---------------------------------------------------------------
Categoría	            Tipos	            Descripción
---------------------------------------------------------------
Escalares	            string	            Cadenas de texto
                        int	                Números enteros
                        float	            Números decimales
                        bool	            Verdadero o falso
----------------------------------------------------------------
Compuestos	            array	            Colección de valores
                        object	            Instancia de clase
----------------------------------------------------------------
Especiales	            null	            Ausencia de valor
                        resource	        Recurso externo

*/
//STRING
$nombre = "Angelinho";

$saludo = "Hola $nombre";

echo $saludo. "\n";
echo gettype($nombre);

//NUMEROS ENTEROS
$edad = 27;
$temperatura = -5;

$millon = 1_000_000;
echo "\n$millon\n";
var_dump($edad);
echo gettype($edad);

//FLOAT 
$precio = 10.88;
echo "\nEl precio del carrito es de: $$precio";

/*
Cuidado con la precisión
Los floats tienen precisión limitada. 0.1 + 0.2 no es exactamente 0.3. Para dinero, usa enteros (céntimos) o la extensión BCMath.
*/

//BOOLEAN
$activo = true;
$eliminado = false;

//Resultado de comparaciones
$esMayor = 18 > 17;
echo "\n \n";
var_dump($esMayor);

$sonIguales = 5 == 5;//true (comparacion debil)
$esIdentico = 5 === "5";//false (comparacion estricta)


//Estos valores se consideran false en contextos booleanos:
$valores = [
    false,
    0,
    0.0,
    "",
    "0",
    [],
    null,
];
//voy a agregar un true al final jaja


foreach ($valores as $valor) {
    if (!$valor) {//en el if se evalua si la condicion es verdadera y como cada valor es falso, en este caso lo que se hizo fue negarlo y asi sea verdadero y entre en el bucle
        echo "Falsy\n";
    }
}

/*
 Un if solo ejecuta su bloque cuando la condición se evalúa como true.

La sintaxis es:

if (condición) {
    // Este código solo se ejecuta si la condición es true
}
 */


//ARRAY

$frutas = ["mango","melon","licha"];

$unaFruta = $frutas[2];
echo "\n". $unaFruta;



//NULL
$sinValor = null;



//VERIFICAR TIPOS DE DATOS

$valor = 'Hola';
 
// gettype() - Obtener el tipo como string
echo gettype($valor); // string
 
// var_dump() - Información detallada (para debug)
var_dump($valor); // string(4) "Hola"
 
// Funciones is_*
is_string($valor);  // true
is_int($valor);     // false
is_float($valor);   // false
is_bool($valor);    // false
is_array($valor);   // false
is_null($valor);    // false
is_numeric($valor); // false (sería true para "123")
is_object($valor);  // false



//TYPE DECLARATIONS
//Aunque PHP es de tipado dinámico, puedes declarar tipos en funciones para mayor seguridad:

declare(strict_types=1); // Modo estricto
 
function sumar(int $a, int $b): int
{
    return $a + $b;
}
 
echo sumar(5, 3);    // 8
// echo sumar("5", 3); // Error en modo estricto
 
function saludar(string $nombre): string
{
    return "Hola, $nombre";
}
 
echo saludar("Carlos"); // Hola, Carlos


// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
/*
Buena práctica
Usa declare(strict_types=1) en tus archivos PHP. Te obligará a ser explícito con los tipos y evitarás errores sutiles.
*/