<?php

    function print_number($number){

        if($number > 0){

            print_number($number - 1);

            if($number%2 == 0)
                echo $number . ". Bilangan Genap\n";
            else
                echo $number . ". Bilangan Ganjil\n";
            
        }
    }

    print_number(10);

?>