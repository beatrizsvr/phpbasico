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
                $a = isset($_GET["ano"])?$_GET["ano"]:1900;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e tem $i anos. <br/>";

                if(($i>=16 && $i<18) || ($i>=65)){
                        $tipoVoto = "voto opcional";
                } elseif ($i<16){
                        $tipoVoto = "não vota";
                } else {
                    $tipoVoto = "voto obrigatório";
                }
                echo "Com essa idade, $tipoVoto.";
            ?>
        </div>
    </body>
</html>