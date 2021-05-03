<?php

    function check_money($uang, $belanja){

        // Alur Perhitungan
        echo "Uang Saat ini: " . $uang;
        echo "\nTotal Belanja: " . $belanja;

        echo "\nSisa Kembalian adalah " . $uang . " dikurangi dengan " . $belanja;

        echo "\n\nSehingga";


        if($uang > $belanja)
            echo "\nSisa Uang : " . ($uang-$belanja) . "\n";
        else
            echo "\nUang kurang !" . "\n";
    }

    $uang_setyo = (3 * 10000) + (4 * 5000) + (5 * 20000);
    $belanja_setyo = 55000; 

    check_money($uang_setyo, $belanja_setyo);

?>