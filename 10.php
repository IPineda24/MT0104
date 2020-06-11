<?php 
$n1=0;
$n2=0;
$n3=0;
$n4=0;
$n5=0;


$edad = [18,18,15,14,14,15,19,19,18,14,15,17,15,19,14,17,17];

for ($i=0; $i < count($edad); $i++) { 
  if ($edad[$i]==14) 
      $n1++;
  
 else if ($edad[$i]==15) 
    $n2++;

    if ($edad[$i]==17) 
    $n3++;

else if ($edad[$i]==18) 
  $n4++;

  else if ($edad[$i]==19) 
  $n5++;
}


    echo"chicos que tiene 14 años en total son: " .$n1."<br>";
    echo"chicos que tiene 15 años en total son: " .$n2."<br>";
    echo"chicos que tiene 17 años en total son: " .$n3."<br>";
    echo"chicos que tiene 18 años en total son: " .$n4."<br>";
    echo"chicos que tiene 19 años en total son: " .$n5."<br>";
