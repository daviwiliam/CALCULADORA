<?php

include_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="" method="post">
        <label>Digite um numero: <input type="text" name="num1"></label><hr>
        <label>Digite um numero: <input type="text" name="num2"></label><hr>
        <label>Escolha a operação: 
            <select name="opera">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </label><hr>
        <input type="submit" value="calcular"><hr>
    </form>
    <h3>Resultado = <?=$result?></h3><hr>
</body>
</html>