<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função 1</title>
</head>
<body>

        <?php
            function escreve_separa($cadeia){
                for ($i=0; $i<strlen($cadeia); $i++){
                    echo $cadeia[$i];
                        if($i<strlen($cadeia)){
                            echo " - ";
                        }
                }
            }

            escreve_separa ("Ola");
            echo "<p>";
            escreve_separa ("Texto mais comprido, para ver o que faz");
            ?>  
    
</body>
</html>