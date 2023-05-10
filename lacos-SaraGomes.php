<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sara</title>
</head>
<body>
    <?php
$alunos=[ ['matricula' => 138025825,
          'nome' => 'Sarinha',
          'idade' => 17,
          'rg' => null],
         ['matricula' => 3897982,
          'nome' => 'Nicolas',
          'idade' => 19,
          'rg' => null],
         ['matricula' => 857562,
          'nome' => 'Natalia',
          'idade' => 6,
          'rg' => null] ];

            echo '<pre>';
            print_r($alunos);
            echo '</pre>';    
            uasort($alunos, function($a, $b){
            if($a['nome'] == $b['nome']) return 0;
            return $a['nome'] < $b['nome'] ? -1:1;});
            echo '<h2>uasort</h2>';
            echo '<pre>';
            print_r(array_values($alunos));
            echo '</pre>';
            echo '<hr>';
            echo '<h2>forech</h2>';
            foreach($alunos as $chave => $value){
            echo $chave;
            echo '<pre>';
            print_r($alunos);
            echo '</pre>';}
            echo '<h2>Forech Aninhado</h2>';
            foreach($alunos as 
            $chave => $value){
            foreach($value as 
            $Nchave => $Nvalue){
            echo $Nchave;
            echo '<pre>';
            echo $Nvalue;
            echo '<br>';
            echo '</pre>';}}
?>
</body>
</html>