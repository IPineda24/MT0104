<?php 


$a=1986;
while ($a <=2020) {
 
    if ($a % 4==0) 
        if ($a%100==0)
           if ($a%400==0) 
              echo $a ." es bisiesto <br>";
           
           else 
               echo $i ." no es bisiesto <br>";
             
              
        else 
           echo $a ."  es bisiesto <br>";
 
          
      else 
       echo $a ." no es bisiesto <br>";
       $a = $a+1; 
      
     
}