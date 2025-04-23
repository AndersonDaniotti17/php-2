<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Matemáticos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <?php

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];


    $adicao = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;
    $media = ($numero1 + $numero2) / 2;


    echo "A soma é ".$adicao;
    echo "<br>";
    echo "O Resultado da subtração é ".$subtracao;
    echo "<br>";
    echo "O Resultado da multiplicação é ".$multiplicacao;
    echo "<br>";
    echo "O Resultado da divisão é ".$divisao;
    echo "<br>";
    echo "O Resultado da Média é ".$media;


    ?>
</div>
</body>
</html>