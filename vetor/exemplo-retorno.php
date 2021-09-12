<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vetor</title>
</head>
<body>
    <h1>Exemplo com Vetor</h1>
    <?php
        
    $numero= array();

    $numero[0] = 1;
    $numero[1] = 2;
    $numero[2] = 3;
    $numero[3] = 4;
    $numero[4] = 5;
    
    echo"length = " . count($numero) . "<br>";

    for($i=0; $i<count($numero); $i++){
        echo $numero[$i] . "<br>";
    }

    /*
    echo $numero[0] . "<br>";
    echo $numero[1] . "<br>";
    echo $numero[2] . "<br>";
    echo $numero[3] . "<br>";
    echo $numero[4] . "<br>";
    */


    ?>
</body>
</html>