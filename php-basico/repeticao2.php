<?php

/*for ($contador=1; $contador < 100 ; $contador ++){
   if($contador % 2 !=0){
    echo $contador .PHP_EOL;
   }    
}*/
$numeroTabuada = 35;

for ($i=0; $i <= 10; $i ++) {
    echo "$numeroTabuada x $i = " .$numeroTabuada*$i. PHP_EOL;
 
}

$peso= 805;
$altura = 1.80;

$imc= round($peso / ($altura * $altura));

echo "Seu IMC é: $imc" ;
echo PHP_EOL;
if($imc <=18){
    echo "Está abaixo do peso";
}else if($imc <= 25){
    echo "peso ideal";
}else if ( $imc <= 32){
    echo "está acima do peso";
}else {
    echo "muito acima do peso";
}
echo " recomendado";