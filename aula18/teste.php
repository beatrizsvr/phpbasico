<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP Básico</title>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
<div>
    <?php
    $a = 10;
    $b = "10";
    if ($a == $b)
        print "caso 1";
    else
        print "caso 2";

    if ($a === $b) {
        print "caso 3";
    } else {
        print "caso 4";
    }
    ?>
</div>
</body>
</html>