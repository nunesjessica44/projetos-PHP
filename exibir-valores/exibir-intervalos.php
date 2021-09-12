<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>

        <style>
            body{
                background: #fffbd6;
                margin: 50px;
            }
            .erro{
                color:red;
            }
            .intervalo{
                color: #4a0cc3;
            }
            .numeros{
                color: #9e3c5d;
                font-weight: bold;
                font-size: 19px;
            }
        </style>
        <?php
            $inicio = isset($_POST["inicio"])? $_POST["inicio"] : "";
            $fim = isset($_POST["fim"]) ? $_POST["fim"] : "";
        

            if($inicio== "" || $fim == ""){
                echo"<h3 class='erro'></br>Digite os valores para o início e o fim!</h3>";
            }else{
                echo"<h4 class='intervalo'>Inicio: $inicio </br> Fim: $fim </br> </br></h4>";

                for($i=$inicio; $i<=$fim; $i++){
                    if($i == $fim){
                        echo "<span class='numeros'> $i.</span>";
                    }else{
                        echo "<span class='numeros'> $i,</span>";
                    }
                }
            }    
        ?>
    </body>
</html>