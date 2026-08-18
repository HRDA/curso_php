<?php
/*
La sentencia switch
switch compara un valor contra múltiples casos y ejecuta el bloque correspondiente. 
Es útil cuando tienes muchas comparaciones contra el mismo valor.
*/

$metodoHttp = 'DELETE';
 
switch ($metodoHttp) {
    case 'GET':
        $mensaje = 'Obteniendo datos...';
        break;
    case 'POST':
        $mensaje = 'Creando recurso...';
        break;
    case 'PUT':
    case 'PATCH':
        $mensaje = 'Actualizando recurso...';
        break;
    case 'DELETE':
        $mensaje = 'Eliminando recurso...';
        break;
    default:
        $mensaje = 'Método no soportado';
}
 
echo $mensaje;

/*
La expresión match (PHP 8+)
PHP 8 introdujo match, una alternativa moderna a switch que soluciona sus problemas principales:
*/
echo "\n";

$diaSemana = 3;
 
$nombreDia = match ($diaSemana) {
    1 => 'Lunes',
    2 => 'Martes',
    3 => 'Miércoles',
    4 => 'Jueves',
    5 => 'Viernes',
    6, 7 => 'Fin de semana',
    default => 'Día no válido',
};
 
echo $nombreDia;

echo "\n";
//MATCH es una EXPRESION, devuelve un valor
$codigo = 404;

$resultado = match ($codigo) {
    200 => 'OK',
    404 => 'No encontrado',
    500 => 'Error en el Server',
    default => 'Desconocido',
};

echo $resultado;

echo "\n";
//2. Usa comparacion estricta (===)
$valor = 0;
$tipo = match ($valor) {
    'texto' => 'Es texto',
    0       => 'Es cero',
    default => 'Otro',
};
echo $tipo;

echo "\n";

//No necesita break
$semaforo = 'amarillo';
$color = match ($semaforo) {
    'rojo'     => 'Detenerse',
    'amarillo' => 'Precaucion',
    'verde'    => 'Avanzar',
    default    => 'Desconocido',
};
echo $color;


echo "\n";
// 4. Múltiples valores en una línea
$dia = 'sábado';
$esFinDeSemana = match ($dia) {
    'sábado', 'domingo' => true,
    default             => false,
};
echo $esFinDeSemana ? 'Es fin de semana': 'No se que dia es';

echo "\n";

//MATCH con condiciones booleanas usando true
$edad = 66;

$categoria = match (true) {
    $edad < 13  => 'Nino',
    $edad < 18  => 'Adolescente',
    $edad < 65  => 'Adulto',
    default     => 'Senior',
};

echo $categoria;

echo "\n";
// Los valores pueden ser expresiones o llamadas a funciones
$operacion = 'suma';
$a = 1;
$b = 20;
$resultado = match ($operacion) {
    'suma' => $a + $b,
    'resta' => $a - $b,
    'multiplica' => $a * $b,
    'divide' => $b !== 0 ? $a / $b : throw new DivisionByZeroError(),
    default => throw new InvalidArgumentException('Operación inválida'),
};
//echo $resultado;


/*
Ejercicio 1: Dia de la semana con switch
Dado $numeroDia = 4, usa switch para asignar el nombre del dia (1=Lunes, 2=Martes, etc.).
Imprime el resultado.
*/

$numeroDia = 10;

switch ($numeroDia) {
    case '1':
        $nombreDia = 'LUNES';
        break;
    case '2':
        $nombreDia = 'MARTES';
        break;
    case '3':
        echo 'MIERCOLES';
        break;
    case '4':
        $nombreDia = 'JUEVES';
        break;
    case '5':
        $nombreDia = 'VIERNES';
        break;
    case '6':
    case '7':
        $nombreDia = 'FIN DE SEMANA';
        break;  
    default:
        $nombreDia = "dia no valido!";
}

echo "Dia $numeroDia: $nombreDia\n";


/*
Ejercicio 2: Tipo de archivo con match
Dada la extension $extension = "png", usa match para determinar el tipo: jpg/jpeg/png/gif = "imagen",
 pdf/doc = "documento", mp4/avi = "video", default = "desconocido".
*/

$extension = "png";

$tipo = match ($extension) {
    'jpg', 'jpeg', 'png', 'gif' => 'imagen',
    'pdf', 'doc'                => 'documento',
    'mp4', 'avi'                => 'video',
    default                     => 'desconocido',
};
echo "ARCHIVO .$extension, ES TIPO: $tipo\n";


/*
Ejercicio 3: Calificacion con match y condiciones
Dada $nota = 72, usa match con true para asignar: 
menos de 50 = "Suspenso", 50-69 = "Aprobado", 70-89 = "Notable", 90+ = "Sobresaliente".
*/

$nota = 100;

$calificacion = match (true){
        $nota >= 90 => 'Sobresaliente',
        $nota >= 70 => 'Notable',
        $nota >= 50 => 'Aprobado',
        default => 'Suspendido',
};
echo "\nNota: $nota, calificacion: $calificacion.";