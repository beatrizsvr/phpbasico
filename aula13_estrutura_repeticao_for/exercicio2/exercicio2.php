<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8"/>
        <title>Curso de PHP Básico</title>
        <link rel="stylesheet" href="../../css/style.css"/>
    </head>
    <body>
        <div>

            <form method="get" action="2tabuada.php">
                <select name="num">
                    <?php
                        for($i=1; $i<=10; $i++){
                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Tabuada"/>
            </form>

        </div>
    </body>
</html>