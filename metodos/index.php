<?php  include('operacoes.php') ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodos</title>
</head>
    <body>
        <?php
            somar(8,2);
            echo "</br>";

            echo "subtração = " . subtrair(8,2);   
            echo "</br>";
            
            $total = multiplicar();  
            echo "multiplicação = " . $total;

            dividir();
        ?>
    </body>
</html>