<?php 
$numeros=[4,2,5,3,4,6,8,5,2,7,2,4];
$potencia=6;


for ($i=0; $i < count($numeros); $i++) { 
    echo $numeros[$i]." elevado al ".$potencia." es = ". pow($numeros[$i], $potencia)."<br>";
  
}
