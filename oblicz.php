<?php

$first = $_POST['first'];
$second = $_POST['second'];

$suma = 0;

for($i = $first;$i<=$second;$i++){
    
    if($i % 2 == 0){
        echo "liczby parzyste to: " . $i .'<br>';
        $suma+=$i;
    }
}

echo "Suma liczb parzystych od 10 do 100 wynosi: " . '<p>'. $suma .'</p>';



?>