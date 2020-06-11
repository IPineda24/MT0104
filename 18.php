<?php 
$n1=50;
$n2=25;
echo "para el numero ".$n1."<br>";
while ($n1>1) {
    if($n1%2==0){
    echo"mitad = ". $n1/2 . "<br>";
    $n1 = $n1/2 ;
}
    else    if($n1%3==0){
    echo "tercera = ". $n1/3 . "<br>";
    $n1 = $n1/3 ;
}else {   if($n1%5 ==0 ){
    echo " quinta = ". $n1/5 . "<br>";
    $n1 = $n1/5 ;
}
    else  {   if($n1%7==0){
    echo " septima = ". $n1/7 . "<br>";
    $n1 = $n1/7 ;
}
    else  {    if($n1%11==0){
    echo "onceava = ". $n1/11 . "<br>";
    $n1 = $n1/11 ;
}
    else {    if($n1%13==0){
    echo "treceavos = ". $n1/13 . "<br>";
    $n1 = $n1/13 ;
}
    else {
    echo "es solo divisible entre el mismo = ". $n1/$n1 . "<br>";
    $n1 = $n1/$n1 ;
    }}}}}
}

echo "<br>para el numero ".$n2."<br>";
while ($n2>1) {
    if($n2%2==0){
    echo"mitad = ". ($n2/2) . "<br>";
    $n2 = $n2/2 ;
}
    else    if($n2%3==0){
    echo "tercera = ". ($n2/3) . "<br>";
    $n2 = $n2/3 ;
}else {   if($n2%5 ==0 ){
    echo " quinta = ". $n2/5 . "<br>";
    $n2 = $n2/5 ;
}
    else  {   if($n2%7==0){
    echo " septima = ". $n2/7 . "<br>";
    $n2 = $n2/7 ;
}
    else  {    if($n2%11==0){
    echo "onceava = ". $n2/11 . "<br>";
    $n2 = $n2/11 ;
}
    else {    if($n2%13==0){
    echo "treceavos = ". $n2/13 . "<br>";
    $n2 = $n2/13 ;
}
    else { 
    echo "es solo divisible entre el mismo = ". $n2/$n2 . "<br>";
    $n2 = $n2 / $n2 ;
    }}}}}
}