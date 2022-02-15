<!-- Snack C
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
    $arrayNumeri = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks3</title>
</head>
<body>
    <div>
        <pre>
            <?php 
                while(count($arrayNumeri) < 15){
                    $numeroGenerato = rand(1, 100);
                    if(!in_array($numeroGenerato, $arrayNumeri)){
                        $arrayNumeri[] = $numeroGenerato;
                    }
                }
                print_r($arrayNumeri);          
            ?>
        </pre>
    </div>
</body>
</html>