<?php 

$contador = 1;
echo "Com While" .PHP_EOL;
while ($contador <= 15){
    echo "$contador ". PHP_EOL; 
    $contador = $contador +1 ;
}
echo "Com For" .PHP_EOL;
for($contador=1; $contador <= 15; $contador++){
    if ($contador !=13){    
        echo "$contador". PHP_EOL;    
    }
    
}