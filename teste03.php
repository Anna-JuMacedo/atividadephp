<!DOCTYPE html>
<html lang= "pt-br">
    <head>
        <title>Estruturas de controle</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Switch/ Case</h1>
        O valor é
        <?php
        $valor = 1;
        switch ($valor) {
            case 1:
            echo "um";
          case 2:
            echo "dois";
            break;
            case 3:
                echo "três";
            default:
            echo "não sei!";
        }

        ?>
    </body>
</html>