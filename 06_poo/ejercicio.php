<?php
//$curso = "Curso de PHP y Laravel con IA";
$precio = 1500;
$fecha_inicio = date("d/m/Y");
$archivado = false;
$estado = $archivado ? "archivado" : "activo";
$nivel = "Avanzado";

/*$temas = [ //esto es un array indexado, se accede a los elementos a traves de sus indices
    'FUNDAMENTOS DE PHP',// para acceder a este valor debemos hacer $temas[0]
    'POO CON PHP',
    'PHP AVANZADO',
    'LARAVEL - BACKEND'
];*/

$curso = [
    'titulo' => "Curso de PHP y Laravel con IA",
    'descripcion' => "En este curso estoy aprendiendo los fundamentos del lenguage PHP, preparandome para despues pasar a utilizar el framework Laravel. Me parece muy interesante que en este curso el profesor este enseñando también como implementar IA en nuestros proyectos, ya que es el presente y futuro del desarrollo.",
    'temas' => [
        'FUNDAMENTOS DE PHP',
        'POO CON PHP',
        'PHP AVANZADO',
        'LARAVEL - BACKEND',
    ]
];

$lecciones = [
    'Leccion 1' => "Aprenderas los conceptos basicos de POO con PHP.",
    'Leccion 2' => "Crearemos un proyecto aplicando POO.",
    'Leccion 3' => "Implementacion de IA en proyectos Backend.",
    'Leccion 4' => "Crearemos una Aplicacion Web basica con Laravel."
];

//creacion de una clase

//metodo antiguo
/*class Autor 
{
    public string $nombre;
    public int $nacimiento;
    public string $descripcion;
    public array $libros;

    public function __construct($nombre, $nacimiento, $descripcion, $libros)
    {
        $this->nombre = $nombre;
        $this->nacimiento = $nacimiento;
        $this->descripcion = $descripcion;
        $this->libros = $libros;

    }
}

$autor = new Autor(
    'Italo Morales',
    1980,
    'Profesor de la escuelade Tecnologia en PLATZI',
    ['Fundamentos de PHP', 'Backend con Laravel','Desarrollo WEB con PHP'],
);*/

//metodo actual
class Autor 
{
    public function __construct(
        public string $nombre,
        public int $nacimiento,
        public string $descripcion,
        public array $libros,
    ) {
        //throw new \Exception('Not implemented');
    }
}

$autor = new Autor(
    nombre:'Italo Morales',
    nacimiento:1980,
    descripcion:'Profesor de la escuelade Tecnologia en PLATZI',
    libros:['Fundamentos de PHP', 'Backend con Laravel','Desarrollo WEB con PHP'],
);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $curso['titulo'] ?></title>
</head>

<body>
    <div>
        <h1>Bienvenido al <?= $curso['titulo'] ?>!</h1>
        <h3>Inversion: $<?= $precio ?>.00</h3>
        <h3>Fecha de inicio: <?= $fecha_inicio ?></h3>

        <?php if ($nivel == "Avanzado"): ?>
            <p>Curso avanzado: Recomendado para estudiandtes que manejan POO en PHP.</p>
        <?php elseif ($nivel == "Intermedio"): ?>
            <p>Curso intermedio: Recomendado para los que ya dominan los fundamentos de PHP.</p>
        <?php elseif ($nivel == "Basico"): ?>
            <p>Curso básico: Recomendado para estudiantes que recien empiezan en PHP.</p>
        <?php else: ?>
            <p>Nivel de curso Incorrecto!</p>
        <?php endif ?>


        <p>
            <?= $curso['descripcion'] ?>
        </p>
    </div>
    <p>[El curso está <b><?= $estado ?></b>]</p>

    <strong>Temas:</strong>
    <ul>
        <?php foreach ($curso['temas'] as $tema): ?>
            <li><?= $tema ?></li>
        <?php endforeach; ?>
    </ul>

    <strong>Lecciones:</strong>
    <ul>
        <?php foreach($lecciones as $clave => $valor): ?>
            <li><strong><?= $clave ?>:</strong> <?= $valor ?></li>
        <?php endforeach; ?>
    </ul>
    
    <strong>Autor del curso:</strong> <?= $autor->nombre ?>
    <ul>
        <li>Fecha nacimiento:<?= $autor->nacimiento ?></li>
        <li>Descripcion: <?= $autor->descripcion ?></li>
        <br>
        <strong>Libros:</strong>
        <?php foreach($autor->libros as $libro): ?>
            <li><?= $libro ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>