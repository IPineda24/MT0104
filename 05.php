<?php 
 //05
 for ($i=25; $i >=0 ; $i--) { 
    if ($i%2 == 0) {
          $div=$i/2;
          echo"{$i} entre 2 = {$div} y residuo de 0 <br>";
    } else {
       $div2=($i-1)/2;
       $res=$i%2;
       echo"{$i} entre 2 = {$div2} y residuo de {$res}<br>" ;
    }
    
}