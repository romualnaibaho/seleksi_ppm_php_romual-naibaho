<?php

    function print_list($number, $menu){

        if($number > 0){

            print_list($number - 1, $menu);

            echo $number . ". Menu ". $menu . " Ke ". $number . "\n";
            
        }
    }

    function print_menu($number){

        for ($i = 1; $i <= $number; $i++){
            if($i == 1){
                $menu = "Makanan";
            }else if($i == 2){
                $menu = "Minuman";
            }else if($i == 3){
                $menu = "Parsel";
            }

            echo $menu."\n";

            if($number > 0){

                print_list($number - 1, $menu);
    
                echo $number . ". Menu ". $menu . " Ke ". $number . "\n";
                
            }
        }

    }

    print_menu(3);

?>