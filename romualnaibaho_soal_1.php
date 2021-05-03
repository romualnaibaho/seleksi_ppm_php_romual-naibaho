<?php

    function check_money($uang, $belanja){

        // Alur Perhitungan
        echo "Uang Saat ini: " . $uang;
        echo "\nTotal Belanja: " . $belanja;

        echo "\nSisa Kembalian adalah " . $uang . " dikurangi dengan " . $belanja;

        echo "\n\nSehingga";


        if($uang > $belanja)
            echo "\nSisa Kembalian Uang : " . ($uang-$belanja) . "\n";
        else
            echo "\nUang kurang !" . "\n";
    }

    $uang_rian = 5 * 5000;
    $belanja_rian = 12 * 1750; //1 lusin = 12 item

    check_money($uang_rian, $belanja_rian);

?>