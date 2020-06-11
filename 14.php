<?php 


$palabra=['3','7','N','3','4','9','N'];
for ($i=0; $i < count($palabra) ; $i++) { 

    if ($palabra[$i]== '0' ) 
        $palabra[$i]='M';

        
    else if ($palabra[$i]=='1' ) 
    $palabra[$i]='U';

    
else if ($palabra[$i]== '2' ) 
$palabra[$i]='R';


else if ($palabra[$i]== '3' ) 
$palabra[$i]='C';


else if ($palabra[$i]=='4') 
$palabra[$i]='I';


else if ($palabra[$i]== '5') 
$palabra[$i]='E';


else if ($palabra[$i]=='6' ) 
$palabra[$i]='L';


else  if ($palabra[$i]== '7') 
$palabra[$i]='A';



 else  if ($palabra[$i]== '8') 
 $palabra[$i]='G';


 else  if ($palabra[$i]=='9' ) 
 $palabra[$i]='O';

}

$word = implode("", $palabra);


echo $word;


