<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

<?php
    $arraydisciplinas = [
    'aluno' =>[
    'psw' => [
    'avaliação' => 3,
    'teste' => 8,],
    'BD' => 9 [
    'avaliação' => 4,
    'teste' => 5,],
    'Geografia' => [
    'avaliação' => 7,
    'teste' => 6,],
    'Matemática' => [
    'avaliação' => 9,
    'teste' => 4,],
    'Química' => [
    'avaliação' => 2,
    'teste' => 3,],],];
print '<pre>';
print_r ($arraydisciplinas);
print '<pre>';
echo '<hr>';
echo '<br>';
echo 'Soma de Notas - Arrays';
echo '<br>';
echo '<br>';
$media=(($arraydisciplinas['aluno']['psw']['avaliação'])) + (($arraydisciplinas['aluno']['psw']['teste'])) /2;
echo "A media em psw é: $media <br>";
echo '<pre>';
?>
</div>

</body>
</html>