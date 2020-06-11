<?php 

//06
$numero = "2020548124548";
echo"el numero es: ". $numero."<br>";
$suma = array_sum(str_split($numero));


    for ($i=0; $i < count(str_split($numero)); $i++) { 
        if ($i==5) {
            echo $numero[$i] . " = ";
        } else {
            echo $numero[$i] . " + ";
        }
        
      
    }
    echo $suma;