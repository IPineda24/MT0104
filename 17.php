<?php 

$numero_dado=38;
for ($i=1; $i < $numero_dado+1 ; $i++) { 
   if ($i == 2) 
       echo $i. " es primo <br>";
       
       else if($i == 1 )
       echo $i. " no es primo <br>";
       else if($i % 2 !==0 )
       echo $i. " es primo <br>";
       else 
       echo $i. " no es primo <br>";
}