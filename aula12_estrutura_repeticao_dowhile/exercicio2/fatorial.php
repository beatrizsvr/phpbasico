<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8"/>
        <title>Curso de PHP Básico</title>
        <link rel="stylesheet" href="../../css/style.css"/>
    </head>
    <body>
        <div>
            <?php
                $v = isset($_GET["val"])?$_GET["val"]:1;
                echo "<h1>Calculando o fatorial de $v </h1>";
                $c = $v;
                $fat = 1;
                do {
                    $fat = $fat * $c;
                    $c--;
                } while ($c >= 1);
                echo "<h2>$v ! = $fat";
            ?>
            <br>
            <a href="fatorial.php" class="botao">Voltar</a>
        </div>
    </body>
</html>