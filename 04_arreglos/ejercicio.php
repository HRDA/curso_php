<?php
$curso = "Curso de PHP y Laravel con IA";
$precio =1500;
$fecha_inicio = date("d/m/Y");
$archivado = false;
$estado = $archivado ? "archivado":"activo";
$nivel = "Avanzado";

$temas = [
    'FUNDAMENTOS DE PHP',
    'POO CON PHP',
    'PHP AVANZADO',
    'LARAVEL - BACKEND'
]
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso ?></title>
</head>

<body>
    <div>
        <h1>Bienvenido al <?= $curso ?>!</h1>
        <h3>Inversion: $<?= $precio ?>.00</h3>
        <h3>Fecha de inicio: <?= $fecha_inicio ?></h3>
        
        <?php if($nivel == "Avanzado"): ?>
            <p>Curso avanzado: Recomendado para estudiandtes que manejan POO en PHP.</p>
        <?php elseif($nivel == "Intermedio"): ?>
            <p>Curso intermedio: Recomendado para los que ya dominan los fundamentos de PHP.</p>
        <?php elseif($nivel == "Basico"): ?>
            <p>Curso básico: Recomendado para estudiantes que recien empiezan en PHP.</p>
        <?php else: ?>
            <p>Nivel de curso Incorrecto!</p>
        <?php endif ?>


        <p>En este curso estoy aprendiendo los fundamentos del lenguage PHP, preparandome para despues pasar a utilizar el framework Laravel. 
        Me parece muy interesante que en este curso el profesor este enseñando también como implementar IA en nuestros proyectos, ya que es el presente y futuro del desarrollo.
        </p>
    </div>
    <p>[El curso está <b><?= $estado ?></b>]</p>
    
    <P>
        <strong>Temas:</strong>
        <ul>
            <li><?= $temas[1] ?></li>
            <li><?= $temas[3] ?></li>
        </ul>
    </P>
</body>

</html>