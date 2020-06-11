<?php 

$num=[8,8.2,8.6,9.8,8,8,8,8,18,9.8];

$suma=0;

for ($i=0; $i < count($num) ; $i++) { 
   $suma=  $suma + $num[$i];
}
echo $suma/ count($num);