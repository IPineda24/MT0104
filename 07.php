<?php 

//07

$Palabra=['B','O','C','I','N','A'];

echo "la palabra es BOCINA <br>";
echo "  pares:  ";
for ($i=0; $i < count($Palabra); $i++) { 
        
    if ( $i % 2== 0){
        echo"{$Palabra[$i]}";
       
    } 
   
}
echo "<br>  impares:  ";
for ($i=0; $i < count($Palabra); $i++) { 
        
    if ( $i % 2 !== 0){
        echo"{$Palabra[$i]}";
       
    } 

}
