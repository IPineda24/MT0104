<?php 



$libros=[[ 
'El señor del tiempo, de Louise Cooper',
' El Castillo Ambulante, de Diana Wynne Jones',
'Fafhrd y el ratonero gris, de Fritz Leiber',
'Crónicas de Ámbar, de Roger Zelazny',
'La Primera Ley, de Joe Abercrombie',
'La Espada de la Verdad, de Terry Goodkind',
'Las Crónicas de Thomas Covenant, el Incrédulo, de Stephen R. Donaldson',
'Alicia en el País de las Maravillas, de Lewis Carrol'],

[  'La maldición de Chalion, de Lois McMaster',
'Trilogía del Vatídico, de Robin Hobb',
'Crónicas de Belgarath, de David Eddings',
    'Solo el Acero, de Richard Morgan',
    'La Saga Tramórea, de Javier Negrete',
    'Memorias de Idhun, de Laura Gallego',
    'Añoranzas y Pesares, de Tad Williams'
],
];



$recomendados=[];
echo "libros que debes leer <br><br>";
for ($i=0; $i < count($libros[0]); $i++) { 
   
    $n1= rand(0, 7);
    array_push($recomendados, $libros[0][$n1] );

}

$total= array_unique($recomendados);
$totale = array_shift($total);


for ($i=0; $i < count($total) ; $i++) { 
   echo $total[$i]."<br>";
}




echo "<br>";


$norecomendados=[];

echo "<br>libros que no debes leer <br><br>";
for ($i=0; $i < count($libros[1]); $i++) { 
   
    $n2= rand(0, 6);
    array_push($norecomendados, $libros[1][$n2] );

}

$total2= array_unique($norecomendados);
$totales = array_shift($total2);


for ($i=0; $i < count($total2) ; $i++) { 
   echo $total2[$i]."<br>";
}