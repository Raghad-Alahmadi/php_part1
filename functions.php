<?php 

    function add($x, $y){
        return $x + $y;
    }


    echo add(5, 10);
    echo add(15, 20);
    echo add(25, 30);




    echo "<br>";

    function hello($x){

        $user = $x;
    
        if ( $user === "Raghad"){
            echo "Hello " . $user;
        }
        else{
            echo "Bye " . $user;
        }
    }

    hello("Raghad");
    echo "<br>";
    hello("Anas");

?>