<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <style>
        .apro{
            font-size:15px;
            text-transform:uppercase;
            color: #00f;/*azul*/
        }

        .repro{
            font-size:15px;
            text-transform:uppercase;
            font-weight:700;
            color: #f00;/*vermelho*/
        }
    </style>
    <?php

        $nome = "João";
        $atividade1 = 8;
        $atividade2 = 10;
        $atividade3 = 6;
        $atividade4 = 7;

        $media = ($atividade1+$atividade2+$atividade3+$atividade4)/4;


        if($media > 7){
            echo"O aluno(a) $nome está <span class='apro'>aprovado</span> com média $media.";
        }else{
            echo"O aluno(a) $nome está <span class='repro'>reprovado</span> com média $media.";
        };
        
    ?>
</body>
</html>
