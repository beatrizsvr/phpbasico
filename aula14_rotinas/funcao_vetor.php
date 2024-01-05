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
            function soma(){
                $p = func_get_arg();
                $tot = func_num_args();
                $soma = 0;

                for($i=0; $i<$tot; $i++){
                    $soma = $soma + $p[$i];
                }
                return $soma;
            }
            ?>
        </div>
    </body>
</html>