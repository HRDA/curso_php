<?php
/*
Operadores
Los operadores te permiten realizar operaciones con valores: cálculos matemáticos, comparaciones, operaciones lógicas y más. 
Conocerlos bien es fundamental para escribir lógica de programación.
 */

//OPERADORES ARITMETICOS
$a = 10;
$b = 3;

echo $a + $b;   // 13  (suma)
echo $a - $b;   // 7   (resta)
echo $a * $b;   // 30  (multiplicación)
echo $a / $b;   // 3.333... (división)
echo $a % $b;   // 1   (módulo - resto de división)
echo $a ** $b;  // 1000 (exponenciación - 10³)

// Negación
echo -$a;       // -10



//OPERADORES DE ASIGNACION

$x = 10;

$x += 5;       // $x = $x + 5  → 15
$x -= 3;       // $x = $x - 3  → 12
$x *= 2;       // $x = $x * 2  → 24
$x /= 4;       // $x = $x / 4  → 6
$x %= 4;       // $x = $x % 4  → 2
$x **= 3;      // $x = $x ** 3 → 8
 
// Para strings
$texto = 'Hola';
$texto .= ' Mundo'; // "Hola Mundo"


//OPERADORES DE INCREMENTO Y DECREMENTO
$x = 5;

//Pre incremento: incrementamos antes de usar el valor
echo ++$x;// 6, incrementa a 6 y luego lo imprime


//Post incremento: usamos el valor y luego incrementamos
echo $x++;// 6, imprime 6 y luego incrementa a 7
echo $x; //7

// Lo mismo para decremento
$y = 5;
echo --$y;  // 4 (pre-decremento)
echo $y--;  // 4 (post-decremento, luego $y = 3)