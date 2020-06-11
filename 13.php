<?php 


$palabra=['C','A','N','C','I','O','N'];
for ($i=0; $i < count($palabra) ; $i++) { 
    if ($palabra[$i]== 'M') 
        $palabra[$i]=0;

        
    else if ($palabra[$i]== 'U') 
    $palabra[$i]=1;

    
else if ($palabra[$i]== 'R') 
$palabra[$i]=2;


else if ($palabra[$i]== 'C') 
$palabra[$i]=3;


else if ($palabra[$i]=='I') 
$palabra[$i]=4;


else if ($palabra[$i]== 'E') 
$palabra[$i]=5;


else if ($palabra[$i]== 'L') 
$palabra[$i]=6;


else  if ($palabra[$i]== 'A') 
$palabra[$i]=7;



 else  if ($palabra[$i]== 'G') 
 $palabra[$i]=8;


 else  if ($palabra[$i]== 'O') 
 $palabra[$i]=9;

}
$word = implode("", $palabra);


echo $word;


