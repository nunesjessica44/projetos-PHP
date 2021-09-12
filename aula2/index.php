<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e Echo</title>
</head>
<body>

    <style>
        .tit{
            color:#f00; /*vermelho*/
            background:#0f0; /*verde*/
        };
    </style>
    <?php
        // $variavel = "teste";
        // echo $variavel. " concatenação com ponto";
    

        //declaração de variaveis e atribuição de valores 
        //PHP fracamente tipado
        $nome = "Jessica";
        $idade = 1;
        $salario = 1200.50;
        
        //exibição de valores e textos
        //echo $nome ."<br>";
        //echo "Olá Mundo!";

        // . (ponto é o simbolo para concatenação)
        //echo "Nome: " . $nome . " Idade: " . $idade . " Salário: " . $salario;
    
        //aspas duplas
        //echo "Nome: $nome Idade: $idade Salário: $salario";
        
        //aspas simples 
        //echo ' <br> Nome: $nome Idade: $idade Salário: $salario';
    
        echo "<h1 class='tit'>Nome: $nome</h1>";



    
    
    ?>
</body>
</html>