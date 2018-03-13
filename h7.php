<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .red {
            background-color: #ff1f1f;
        }
        .green {
            background-color: lime;
        }
        .blue {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>btw calculator</h1>
            <form action="h7.php" method="get">
                Bedrag exclusief BTW <input class="form-control" type="text" name="btw"><br>
                <input type="radio" name="btwcalc" value="laag" checked>Laag 6% <br>
                <input type="radio" name="btwcalc" value="hoog">Hoog 21% <br><br>
                <input type="submit" value="Uitrekenen" class="btn btn-primary">
            </form>
            <br>
            <hr>
            <br>
            <?php
                if(isset($_GET['btw']) && isset($_GET['btwcalc'])) {
                    $calc = $_GET['btwcalc'] == 'laag' ? 0.06 : 0.21;
                    echo 'Bedrag inclusief ' . $calc*100 . '% BTW: &euro; ' . $_GET['btw'] * (1+$calc);
                } else {
                    echo "Niet alle waarde zijn ingevult!";
                }
            ?>
        </div>
    </div>
    <div class="container">
        <h1>simpele calculator</h1>
        <form action="h7.php" method="get">
            Nummer 1: <input class="form-control" type="text" name="num1"><br>
            <input type="radio" name="action" value="plus" checked> Plus
            <input type="radio" name="action" value="aftrekken"> Aftrekken
            <input type="radio" name="action" value="vermenigvuldigen"> Vermenigvuldigen
            <input type="radio" name="action" value="delen"> Delen<br><br>
            Nummer 2: <input class="form-control" type="text" name="num2"> <br>
            <input type="submit" value="Uitrekenen" class="btn btn-primary">
        </form>
        <br>
        <hr>
        <br>
        <?php
            if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['action'])) {
                echo "Antwoord: ";
                switch($_GET['action']) {
                    case 'plus':
                        echo "$_GET[num1] + $_GET[num2] = ";
                        echo $_GET['num1']+$_GET['num2'];
                    break;
                    case 'aftrekken':
                        echo "$_GET[num1] - $_GET[num2] = ";
                        echo $_GET['num1']-$_GET['num2'];
                    break;
                    case 'vermenigvuldigen':
                        echo "$_GET[num1] x $_GET[num2] = ";
                        echo $_GET['num1']*$_GET['num2'];
                    break;
                    case 'delen':
                        echo "$_GET[num1] / $_GET[num2] = ";
                        echo $_GET['num1']/$_GET['num2'];
                    break;
                }
            } else {
                echo "Niet alle waarde zijn ingevult!";
            }
        ?>
        <br><br>
    </div>
    <div class="<?php 
        if(isset($_GET['color'])) {
            echo $_GET['color'];
        }
    ?> jumbotron">
        <div class="container">
            <h1>background setter</h1>
            <form action="h7.php" method="get">
                <input type="radio" name="color" value="red" checked> Rood <br>
                <input type="radio" name="color" value="green"> Groen <br>
                <input type="radio" name="color" value="blue"> Blauw <br> <br>
                <input type="submit" value="Kleur instellen" class="btn btn-primary">
            </form>
        </div>
    </div>
    <div class="container">
        <h1>Korting calculator</h1>
        <form action="h7.php" method="get">
            Prijs <input class="form-control"  type="text" name="prijs"> <br>
            Korting (%) <input  class="form-control" type="text" name="korting"> <br> <br>
            <input type="submit" value="Uitrekenen" class="btn btn-primary">
        </form>
        <br><br><hr><br>
        <?php
            if(isset($_GET['prijs']) && isset($_GET['korting'])) {
                echo 'Bedrag inclusief ' . $_GET['korting'] . '% korting: &euro; ' . $_GET['prijs'] * ((100 - $_GET['korting'])/100);
            } else {
                echo "Niet alle waarde zijn ingevult!";
            }
        ?>
        <br><br>
    </div>
</body>
</html>