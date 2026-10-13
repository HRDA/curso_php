<?php
require "metodos_magicos.php";

$curso = new Curso(
    titulo: "PHP y Laravel con IA",
    subtitulo: "Desarrollo WEB - Backend",
    descripcion:"En este curso aprenderas a como desarrollar aplicaciones web con PHP y Laravel, implementando IA.",
    etiquetas:['PHP','LARAVEL','FRAMEWORK','POO']
);

$curso->addEtiquetas("Etiqueta Nueva");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso->titulo ?></title>
</head>
<body>
    <h1>Bienvenido al curso de <?= $curso->titulo ?></h1>
    <h2><?= $curso->subtitulo ?></h2>
    <p><?= $curso->descripcion ?></p>

    <strong>Etiquetas:</strong>
    <ul>
        <?php foreach($curso->etiquetas as $etiqueta): ?>
            <li><?= $etiqueta ?></li>
        <?php endforeach ?>
    </ul>
    
    
</body>
</html>