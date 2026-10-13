<?php
require __DIR__ . '/vendor/autoload.php';

use App\Curso;
use App\CursoType;

$curso = new Curso(
    titulo: 'Curso de PHP y Laravel',
    subtitulo: 'Desarrolla aplicaciones modernas.',
    descripcion: 'En este curso aprenderas a crear codigo Profesional con PHP y Laravel.',
    etiquetas: ["PHP","LARAVEL","FRAMEWORK","WEB"],
    tipo: CursoType::PAGO,
);

$curso->addEtiquetas("");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso->titulo ?></title>
</head>
<body>
    <h1>Bienvenido al <?= $curso->titulo ?> - <?= $curso->tipo->getTipo() ?></h1>
    <h2><?= $curso->subtitulo ?></h2>
    <strong>
        <p>
            <?= $curso->descripcion ?>
        </p>
    </strong>

    <strong><h3>Etiquetas:</h3></strong>
    <ul>
        <?php foreach($curso->etiquetas as $etiqueta):?>
            <li><?= $etiqueta ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>
