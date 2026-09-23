<?php
/*
EJERCICIO 1

Simula un menu utilizando switch
 */

echo "+------------------------------------------------+\n";
echo "+             MENU DE TAREAS                     +\n";
echo "+------------------------------------------------+\n";
echo "[1]   VER PERFIL\n";
echo "[2]   VER TAREAS\n";
echo "[3]   CREAR TAREAS\n";
echo "[4]   CERRAR SESION\n";
echo "[5]   SALIR\n";
echo "\nIngresa una opcion (1-5): ";
$opcion = 1;
echo "\nSeleccionaste: $opcion\n";

switch ($opcion) {
    case 1:
        $out = "VER PERFIL...";
        break;
    case 2:
        $out = "VER TAREAS...";
        break;
    case 3:
        $out = "CREAR TAREAS...";
        break;
    case 4:
        $out = "CERRAR SESION...";
        break;
    case 5:
        $out = "SALIR...";
        break;
    default:
        $out = "OPCION NO VALIDA!!";
        break;
}

echo $out . "\n";



/*
EJERCICIO 2

Crea un programa que reciba una letra representando una calificación:

A → Excelente
B → Muy bien
C → Bien
D → Necesita mejorar
F → Reprobado
 */

$nota = 'b';

$nota = mb_strtoupper($nota);


switch ($nota) {
    case 'A':
        $calificacion = "Excelente!";
        break;
    case 'B':
        $calificacion = "Muy bien!";
        break;
    case 'C':
        $calificacion = "Bien!";
        break;
    case 'D':
        $calificacion = "Necesita mejorar!";
        break;
    case 'F':
        $calificacion = "Reprobado!";
        break;
    default:
        $calificacion = "Calificación no válida.";
        break;
}

echo  "\nIngreso: $nota, su calificacion es: $calificacion";

/*
Ejercicio 3 — Código de idioma

Crea un programa que reciba un código de idioma:

es → Español
en → Inglés
fr → Francés
de → Alemán
it → Italiano
 */

$codigo = "it";
$codigo = strtolower($codigo);

$resultado = match ($codigo) {
    'es'    => 'Espanol',
    'en'    => 'Ingles',
    'fr'    => 'Frances',
    'de'    => 'Aleman',
    'it'    => 'Italiano',
    default => 'Idioma no disponible',
};

echo "\nIdioma seleccionado: $resultado";




/*
Ejercicio 4 — Tipo de usuario

Crea un programa que reciba un número que represente el tipo de usuario:

1 → Administrador
2 → Editor
3 → Usuario
4 → Invitado
 */

$userType = 10;

$rol = match ($userType) {
    1       => "\nTipo: $userType\nRol: 'Administrador'\n[Tienes acceso total al sistema]",
    2       => "\nTipo: $userType\nRol: 'Editor'\n[Puedes crear y modificar el contenido]",
    3       => "\nTipo: $userType\nRol: 'Usuario'\n[Puedes consultar  el contenido]",
    4       => "\nTipo: $userType\nRol: 'Invitado'\n[Solo puedes visualizar informacion publica]",
    default => "\nTipo: $userType\nRol: 'Desconocido'\n[Acceso denegado]",
};

echo $rol;