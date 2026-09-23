<?php

/*
Ejercicio 1: Dia de la semana con switch
Dado $numeroDia = 4, usa switch para asignar el nombre del dia (1=Lunes, 2=Martes, etc.). Imprime el resultado.
*/

$dia = 1;

switch ($dia) {
    case 1:
        echo "LUNES";
        break;
    case 2:
        echo "MARTES";
        break;
    case 3:
        echo "MIERCOLES";
        break;
    case 4:
        echo "JUEVES";
        break;
    case 5:
        echo "VIERNES";
        break;
    case 6:
    case 7:
        echo "FIN DE SEMANA";
        break;
    default:
        echo "OPCION NO VALIDA!";
        break;
}


/*
Ejercicio 2: Tipo de archivo con match
Dada la extension $extension = "png", usa match para determinar el tipo: jpg/jpeg/png/gif = "imagen", pdf/doc = "documento", mp4/avi = "video", default = "desconocido".
*/

$extension = "jpg";

$resultado = match ($extension) {
    'jpg','jpeg','png','gif' => 'Imagen',
    'pdf','doc' => 'Documento',
    'mp4','avi' => 'Video',
    default => 'Desconocido'
};

echo "\nEl archivo .$extension es tipo: $resultado";

/*
Ejercicio 3: Calificacion con match y condiciones
Dada $nota = 72, usa match con true para asignar: menos de 50 = "Suspenso", 50-69 = "Aprobado", 70-89 = "Notable", 90+ = "Sobresaliente".
*/

$nota = 50;

$resultado = match (true) {
    $nota < 50 => 'Suspenso',
    $nota < 70 => 'Aprobado',
    $nota < 90 => 'Notable',
    default => 'Sobresaliente'
};

echo "\nNota: $nota, esta en un nivel: $resultado";