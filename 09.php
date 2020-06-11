<?php 
//09

$cuenta= [
    ['si','si','si','si','si','si','si','si','si','si'],
    ['no','no','no','no','no'],
  
];

$total=count($cuenta[0])+count($cuenta[1]);
echo"total de respuestas = ".$total ;
echo"<br>";


$nsi=count($cuenta[0]);
echo"frecuencia de Si = ".$nsi ;
echo"<br>";


$porcent = ($nsi*100)/$total;
echo"porcentaje de respuesta  \"SI\" =  ". number_format($porcent, 2)." %";
echo"<br>";




$Nno=count($cuenta[1]);
echo"frecuencia de No = ".$Nno ;
echo"<br>";

$porcentno = ($Nno*100)/$total;
echo"porcentaje de respuesta  \"NO\" =  ". number_format($porcentno, 2)." %";
echo"<br>";