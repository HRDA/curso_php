<?php
$curso = "Curso de PHP y Laravel con IA";
$precio =1500;
$fecha_inicio = date("d/m/Y");
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
        <p>En este curso estoy aprendiendo los fundamentos del lenguage PHP, preparandome para despues pasar a utilizar el framework Laravel. 
        Me parece muy interesante que en este curso el profesor este enseñando también como implementar IA en nuestros proyectos, ya que es el presente y futuro del desarrollo.
        </p>
    </div>   
</body>

</html>