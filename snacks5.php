<!-- Snack E
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.-->
<?php
    $classe = [
        [
            'nome' => 'Giulio',
            'cognome' => 'Albano',
            'voti' => [
                'italiano' => '8',
                'inglese' => '6',
                'matematica' => '9',
                'chimica' => '7',
            ] 
        ],
        [
            'nome' => 'Matteo',
            'cognome' => 'Salvalaggio',
            'voti' => [
                'italiano' => '6',
                'inglese' => '8',
                'matematica' => '6',
                'chimica' => '3',
            ] 
        ],
        [
            'nome' => 'Ludovico',
            'cognome' => 'Guzzo',
            'voti' => [
                'italiano' => '8',
                'inglese' => '6',
                'matematica' => '7',
                'chimica' => '8',
            ] 
        ],
        [
            'nome' => 'Federico',
            'cognome' => 'Spagnoli',
            'voti' => [
                'italiano' => '6',
                'inglese' => '7',
                'matematica' => '6',
                'chimica' => '5',
            ] 
        ],
        [
            'nome' => 'Fabrizio',
            'cognome' => 'Manca',
            'voti' => [
                'italiano' => '6',
                'inglese' => '5',
                'matematica' => '7',
                'chimica' => '4',
            ] 
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks5</title>
</head>
<body>
    <div>
        <?php 
            for($i=0; $i < count($classe); $i++){
                echo $classe[$i][nome];
                echo $classe[$i][cognome].': ';
                echo $mediaVoti = array_sum($classe[$i][voti])/ count($classe[$i][voti]).'<br>';
            
            }
        ?>
    </div>

</body>
</html>