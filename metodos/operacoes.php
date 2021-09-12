<?php
   
    //peocedimento = sem return
    function somar($a, $b){
        echo"soma = a: ". ($a+$b);
    }

    //função = com return
    function subtrair($a, $b){
        return $a-$b;
    }

    function multiplicar(){
        $n1 = 2;
        $n2 = 10;
        return $n1 * $n2;
    }


    function dividir(){
        $n1 = 80;
        $n2 = 2;
        
        echo "<h1></br>Dividir:  " . ($n1 / $n2) . "</h1>";

    }
?>