<?php

    function print_number($count, $number, $b){

        for($i=1; $i<$number; $i++){
            $count += $b;
        }

        echo $count;
    }
    
    $U1 = 10000;
    echo "Diketahui U1 adalah ".$U1; 
    $U68 = 30100;
    echo "\nDiketahui U68 adalah ".$U68;

    echo "\nMaka b adalah  U68 dikurang U1 (".($U68-$U1).")dibagi dengan 68-1 = 67";
    $b = ($U68-$U1)/67;
    echo "\nSehingga b adalah ".$b;

    $index = 81;
    echo "\n\nIndex yang mau dicari adalah ".$index;

    echo "\n\nSehingga pengeluaran pada toko kelonton ke-".$index." adalah ";

    print_number($U1, $index, $b);

?>