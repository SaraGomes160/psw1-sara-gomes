<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Minhas Disciplinas</h1>
    <?php
$var = array(
 "Banco de dados"=> array 
 ("avaliaçao" => '20',
 "teste" => "20", 
 "nota1" => '10', 
 "av1" => '10'),

 "Biologia"=> array 
 ("avaliaçao"=>'30', 
 "teste"=> '19', 
 "nota1"=>'14', 
 "av1"=>'10'),

"Redes de computadores"=>array 
("avaliaçao"=>'50', 
"trabalho"=>'50'),

"historia"=> array 
("prova1"=>'24', 
"trabalho"=>'20',
"prova2"=>'38')
);

echo "<hr>";

foreach ($var as $disciplinas => $notass){
    echo "$disciplinas" . "<br>";
    foreach($notass as $notas => $valoresDasNotas) {
        echo "$notas: $valoresDasNotas <br>";
    }
    echo "<hr>";
}


    ?>
</body>
</html>