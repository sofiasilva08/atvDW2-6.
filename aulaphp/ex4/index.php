<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>exemplo de PHP</h1>
    <?php 
    date_default_timezone_set("america/Sao_Paulo");
    echo"Hoje é dia". date("d/m/Y");
    echo"e a hora atual e". date("G:i:s");
    ?>
</body>
</html>