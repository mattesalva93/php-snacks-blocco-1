<!--Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60-->

<?php
    $giornata = [
        [
        'teamCasa' => 'GERMANI BRESCIA',
        'teamOspite' => 'ALLIANZ PALLACANESTRO TRIESTE',
        'punteggioCasa' => '87',
        'punteggioOspite' => '76'
        ],
        [
        'teamCasa' => 'BERTRAM DERTHONA BASKET TORTONA',
        'teamOspite' => 'DOLOMITI ENERGIA TRENTINO',
        'punteggioCasa' => '76',
        'punteggioOspite' => '50'
        ],
        [
        'teamCasa' => 'A|X ARMANI EXCHANGE MILANO',
        'teamOspite' => 'CARPEGNA PROSCIUTTO PESARO',
        'punteggioCasa' => '91',
        'punteggioOspite' => '57'
        ],
        [
        'teamCasa' => 'FORTITUDO KIGILI BOLOGNA',
        'teamOspite' => 'HAPPY CASA BRINDISI',
        'punteggioCasa' => '67',
        'punteggioOspite' => '73'
        ],
        [
        'teamCasa' => 'UMANA REYER VENEZIA',
        'teamOspite' => 'OPENJOBMETIS VARESE',
        'punteggioCasa' => '82',
        'punteggioOspite' => '93'
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks1</title>
</head>
<body>
    <div>
        <?php 
            for($i=0; $i < count($giornata); $i++){
                echo $giornata[$i][teamCasa]; 
                echo ' - ';
                echo $giornata[$i][teamOspite].' | '; 
                echo $giornata[$i][punteggioCasa];
                echo ' - ';
                echo $giornata[$i][punteggioOspite].'<br>';
            }
        ?>
    </div>

</body>
</html>