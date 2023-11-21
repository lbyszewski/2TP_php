<?php

$sumaTab = 0;

$tablica = [101,201,301,401,501,601,701,801,901,1001];


for($j=0;$j<10;$j++){

    if($tablica[$j] % 2 != 0){
        echo "elementy parzyste tablicy to: " . $tablica[$j] .'<br>';
        $sumaTab+=$tablica[$j];
    }
}
echo "Suma liczb parzystych od 10 do 100 wynosi: " . '<p>'. $sumaTab .'</p>';
?>