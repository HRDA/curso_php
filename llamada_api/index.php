<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
//Inicializamos una nueva sesion de CURL; ch = curl handle
$ch = curl_init(API_URL);

//Indicamos que queremos recibir el resultado de la aplicacion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Ejecutamos la peticion
$result = curl_exec($ch);
$data = json_decode($result, true);
//Una alternativa seria utilizar file_get_contents
//$result = file_get_contents(API_URL); //SI SOLO QUIERES HACER UN GET DE UNA API
curl_close($ch);
//var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROXIMA PELICULA DE MARVEL</title>
    <!-- Fluid viewport -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.fluid.classless.min.css"
    >
</head>
<body>
    <main >
        <h1 style="display: flex; justify-content: center;">La próxima pelicula de MARVEL...</h1>
        <section style="display: flex; justify-content: center;">
            <img src="<?=$data['poster_url'];?>" width="300" alt="Poster de <?= $data['title']?>"
            style="border-radius: 16px;"/>
        </section>
        <hgroup>
            <h2 style="display: flex; justify-content: center;">
                <?= $data['title'];?> se estrena en <?= $data['days_until'];?> días.
            </h2>
            <h3 style="display: flex; justify-content: center;">
                Fecha de estreno: <?=$data['release_date'];?>
            </h3>
        </hgroup>
    </main>
    
    
</body>
</html>
