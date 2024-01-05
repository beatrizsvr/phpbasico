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
                for($i=1; $i <= 10; $i++){
                    echo "$i ";
                }
                echo "<br>";

                for($i=10; $i>=1; $i--){
                    echo "$i ";
                }
                echo "<br>";

                for($i=0; $i <=50; $i +=5){
                    echo "$i ";
                }
                echo "<br>";

                for($i=20; $i>=0; $i-=2){
                    echo "$i ";
                }
            ?>
        </div>
    </body>
</html>