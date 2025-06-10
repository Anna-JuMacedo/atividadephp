<!DOCTYPE html>
<html lang= "pt-br">
    <head>
        <title>Exemplo com PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Dia e Noite</h1>
        <?php
        date_default_timezone_set("America/Sao_Paulo");
        $hoje = date("d/m/Y");
        $agora = date("H:i");
        $hora = date("H");
        if ($hora < 12 or $hora > 4){
            echo "<img src= 'sol.jpg'>";
            echo "Bom dia! ";

        }elseif ($hora < 18 or $hora > 12){
            echo "<img src= 'sol.jpg'>";
            echo "Boa Tarde! ";

        }else{
            echo "<img src= 'lua.jpg'>";
            echo "Boa Noite! ";
        }
        echo "Hoje é dia ". $hoje. " e agora são ". $agora. " horas.";