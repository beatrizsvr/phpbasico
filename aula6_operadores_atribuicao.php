<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Curso de PHP Básico | Operadores de Atribuição</title>
</head>
<body>
    <div>
        <?php
            $preco = $_GET ["p"];
            echo "O preço é $preco";
            $preco += ($preco*.1);
            echo "<br>O novo preço é R$$preco";
        ?>
    </div>
</body>
</html>
