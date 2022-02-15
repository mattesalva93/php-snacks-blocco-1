<!--Snack B
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare 
 “Accesso riuscito”, altrimenti “Accesso negato” -->

 <?php
    $email = $_GET["email"];
    $name = $_GET["name"];
    $age = $_GET["age"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks2</title>
</head>
<body>

    <div>
        <?php 
            if(strlen($name) > 3){
                echo $name.' è valido';
            }else{
                echo $name.' non è valido';
            }
        ?>
    </div>

    <div>
        <?php 
            if (strrpos($email, "@") && strrpos($email, ".")){ 
                echo $email.' è valida';
            }else{
                echo $email.' non è valida';
            }
        ?>
    </div>

    <div>
        <?php 
            if(is_numeric($age)){
                echo $age.' è valido';
            }else{
                echo $age.' non è valido';
            }
        ?>
    </div>


</body>
</html>