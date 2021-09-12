<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exibir valores</title>
</head>
    <body>
        <style>
            body{
                background: #f9d9ff;
                margin: auto;
            }
            .titulo{
                color: #6c30d6;
            }
            input{
                border: none;
                height: 30px;
                border-radius: 2px;
            }
        </style>
        <h1 class="titulo">Exibe intervalos</h1>
        <p>
            Insira os números abaixo, e exibiremos o intervalo definido. 
        </p>
        <form action="exibir-intervalos.php" method="post"> 
            <input type="text" name="inicio" placeholder="Número inicial">
            <input type="text" name="fim" placeholder="Número final">
            <input type="submit" value="Exibir intervalo">
        </form>
    </body>
</html>