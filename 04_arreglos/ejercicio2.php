<?php

//Practica de arreglos

$personas = array(
    'persona1' => [
        'nombre' => 'Angel',
        'apellido' => 'Romero',
        'ocupacion' => 'Informatico',
        'comidas' => [
            'favoritas' => ['pupusas','pollo','hamburguesas'],
            'no_favoritas' => ['flor de izote','pacaya','berenjena']
        ]
    ],
    'persona2' => [
        'nombre' => 'Daniel',
        'apellido' => 'Hernandez',
        'ocupacion' => 'Contador',
        'comidas' => [
            'favoritas' => ['tacos','pizza','tortas'],
            'no_favoritas' => ['ayote','huevos','frijoles']
        ]
    ],
    'persona3' => [
        'nombre' => 'Helen',
        'apellido' => 'Rrez',
        'ocupacion' => 'English Teacher',
        'comidas' => [
            'favoritas' => ['pasta','carne','sushi'],
            'no_favoritas' => ['ensalada','papas fritas','guacamole']
        ]
    ]
);

echo "mostrando la primer persona: {$personas['persona1']['nombre']}, su comida fovorita es: {$personas['persona1']['comidas']['favoritas'][0]}\n";
echo "mostrando la segunda persona: {$personas['persona2']['nombre']}, su comida fovorita es: {$personas['persona2']['comidas']['favoritas'][0]}\n";
echo "mostrando la tercer persona: {$personas['persona3']['nombre']}, su comida fovorita es: {$personas['persona3']['comidas']['favoritas'][0]}";
