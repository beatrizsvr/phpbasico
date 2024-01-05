<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Curso de PHP Básico | Somadores</title>
</head>
<body>
    <div>
        <?php
            $num1 = 2;
            $num2 = 3;

            echo "A soma vale " .($num1 + $num2);
            echo "<br> A subtração vale " .($num1 - $num2);
            echo "<br>A multiplicação vale " .($num1 * $num2);
            echo "<br>A divisão vale " .($num1 / $num2);
            echo "<br>A modelo vale " .($num1 % $num2);
            echo "<br>A média vale " . ($num1 + $num2)/2;
        ?>;
    </div>
</body>
</html>