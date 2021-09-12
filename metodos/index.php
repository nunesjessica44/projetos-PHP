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
        <form method="post">
            <input type="text" placeholder="Número 1" name="num1" id="n1-index"/>
            <input type="text" placeholder="Número 2" name="num2" id="n2-index"/>
            <input type="submit" value="Somar"/>
        </form>

        <?php
            somar($_POST['num1'], $_POST['num2']);
        ?>


        <?php
            /*somar(8,2);
            echo "</br>";

            echo "subtração = " . subtrair(8,2);   
            echo "</br>";

            $total = multiplicar();  
            echo "multiplicação = " . $total;

            dividir();*/
        ?>
    </body>
</html>