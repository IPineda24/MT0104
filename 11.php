<?php 


//puede agregar y quitar nombre, solo que debe de iniciar con mayuscula;

$nombres = ['Alberto' , 'Berta' , 'Cristian' , 'Daniela' , 'Enrrique' , 'Francisco' , 'Gerardo' , 'Hugo' , 'Irvin',];
$letras= [];
$Abecedario = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
   
   
for ($i=0; $i < count($nombres) ; $i++) { 
    
    $total =  substr($nombres[$i],0,1) ;
    array_push($letras, $total);
    echo $total."<br>";
   
}


for ($j=0; $j< 27 ; $j++) { 


   if (in_array($Abecedario[$j], $letras)) {
    unset($Abecedario[$j]);
}
    
}


echo " <br>Faltan las letras<br>";

  print_r($Abecedario);


