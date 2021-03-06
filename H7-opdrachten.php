<html>
<head>
<title>H7 opdrachten</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="formulierstylesheet.css">
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
        form {
            padding:0.5em;
        }
    </style>
</head>
<body>
    <!-- downloadknop -->
    <a href="https://www.ictacademie.info/milangupta/downloads/H7-opdrachten.zip">
    <button class="btn btn-primary">Download knop PHP</button>
    </a>



    <!-- opdracht 1 -->
    <h3>BTW calculator</h3>
    <form method="GET">
        Bedrag exclusief BTW
        <input type="number" name="exclBTW" min="0" required>
        <br>
        <input type="radio" name="BTW" value="1.06">Laag, 6%
        <br>
        <input type="radio" name="BTW" value="1.21">Hoog, 21%
        <br><br>
        <input type="submit" value="uitrekenen">

    </form>

    <?php

    if(isset($_GET['exclBTW'])) {
        $BTW=$_GET['BTW'];
        $exclBTW=$_GET['exclBTW'];
        $totaal=$BTW * $exclBTW;
        $BTWvar=$totaal-$exclBTW;
        $btwnummer=$_GET['BTW'] - 1;

        echo "Bedrag inclusief &euro;". $BTWvar." BTW bij ". $btwnummer."% BTW: &euro; ". $totaal ."<br>";

    } 
    ?>
    <!-- opdracht 2 -->
    <h3>Simpele calculator</h3>
    <form method="get">
    Value 1 <input type="number" name="val1" required>
    <br>
    <input type="radio" name="rekenvorm" value="optel" required>Optellen
    <br>
    <input type="radio" name="rekenvorm" value="aftrek">Aftrekken
    <br>
    <input type="radio" name="rekenvorm" value="vermenig">Vermenigvuldig
    <br>
    <input type="radio" name="rekenvorm" value="deel">Delen
    <br>
    Value 2 <input type="number" name="val2" required>
    <br>
    <br>
    <input type="submit" value="Berekenen">

    <?php
        if(isset($_GET['val1'])) {
            $switchvar=$_GET['rekenvorm'];
            $var1=$_GET['val1'];
            $var2=$_GET['val2'];
            switch ($switchvar) {
                case $switchvar == "optel": 
                    $totaal=$var1+$var2;
                    echo "totaal =".$totaal;
                    break;
                case $switchvar == "aftrek": 
                    $totaal=$var1-$var2;
                    echo "totaal =".$totaal;
                    break;
                case $switchvar == "vermenig": 
                    $totaal=$var1*$var2;
                    echo "totaal =".$totaal;
                    break;
                case $switchvar == "deel": 
                        $totaal=$var1/$var2;
                        echo "totaal =".$totaal;
                        break;
            }
        }
    ?>

    </form>
    <!-- opdracht 3 -->
    <div class="<?php 
            if(isset($_GET['color'])) {
                echo $_GET['color'];
            }
        ?> 
    ">
            <h3>background setter</h3>
            <form method="get">
                <input type="radio" name="color" value="red" checked> Rood <br>
                <input type="radio" name="color" value="green"> Groen <br>
                <input type="radio" name="color" value="blue"> Blauw <br> <br>
                <input type="submit" value="Kleur instellen">
            </form>
    </div>
    <!-- opdracht 4 -->
    <h3>Korting calculator</h3>
    <form method="get">
        Prijs <input type="text" name="prijs" required> <br>
        Korting (%) <input type="text" name="korting" required> <br> <br>
        <input type="submit" value="Uitrekenen">
    </form>
    
    <?php
        if(isset($_GET['prijs']) && isset($_GET['korting'])) {
            echo 'Bedrag inclusief ' . $_GET['korting'] . '% korting: &euro; ' . $_GET['prijs'] * ((100 - $_GET['korting'])/100);
        } 
    ?>
    
    <!-- opdracht 5 -->
    <h3>Parabool ABC formule</h3>
    <p>Let op, als je geen geldige waarden heb ingevuld krijg je "NAN" als antwoord.</p>
    <form method="get">
        <input type="number" name="parabool1" required>
        x^2 +
        <input type="number" name="parabool2" required>
        x + 
        <input type="number" name="parabool3" required>
        = 0
        <br><br>
        <input type="submit">
    </form>

    <?php
    if(isset($_GET['parabool1'])) {
        $A=$_GET['parabool1'];
        $B=$_GET['parabool2'];
        $C=$_GET['parabool3'];
    
        $D=($B*$B) - (4*$A*$C);
        $x1=(($B*-1) + (sqrt($D))) / (2*$A);
        $x2=(($B*-1) + (-1*sqrt($D))) / (2*$A);
            
        echo "x1 = ".$x1."<br>";
        echo "x2 = ".$x2."<br>";
    }
    ?>
    <!-- opdracht 6 -->
    <h3>Gemiddelde berekenen van reeks</h3>
    <form method="get">
        <input type="number" name="getalgem" min="1.0" max="10.0" step="any" required>
        <br><br>
        <input type="submit" value="uitrekenen">
    </form>

    <?php
    session_start();
    
    if(isset($_GET['getalgem'])) {
        $getalgem = $_GET['getalgem'];
        array_push($_SESSION['sessiearray'], $getalgem);
        $arraycount = count($_SESSION['sessiearray']);
            echo "er zitten $arraycount nummers in het array <br>";
        $avgarray = array_sum($_SESSION['sessiearray']) / $arraycount;
            echo "het gemiddelde cijfer van de reeks is ".number_format($avgarray, 1);
        foreach($_SESSION['sessiearray'] as $items) {
            
        } 
    } else {
        $sesarray=array();
        $_SESSION['sessiearray'] = $sesarray;
        }
    ?>
    <br><br>


    <!-- opdracht 7 -->
    <h3>Loterij calculator</h3>
    <form method="get">
        Startkapitaal <input type="number" name="startkap" min="1" required>
        <br>
        Rentepercentage <input type="number" name="rentepercentage" min="1" max="100" required>
        <br>
        Jaarlijkse opname <input type="number" name="jaaropname" min="1" required>
        <br><br>
        <input type="submit" value="Bereken de looptijd">
    </form>

    <?php
    if(isset($_GET['startkap'])) {
        $start=$_GET['startkap'];
        $renteper=$_GET['rentepercentage'];
        $jaaropname=$_GET['jaaropname'];
        $geld = $start;
        $count= 0;
        while($geld>$jaaropname && $count<100)  {
            $geld = $geld - $jaaropname;
            $geld = $geld * (1+($renteper/100));
            $count++;
        } 
        echo $count." jaar af te nemen."."<br>";
        echo "geld over: ".number_format($geld, 2, ',', '.');
        if($count>99) {
            echo "<br>Dit bedrag is je hele leven af te nemen.";
        }
    }
    ?>
    <br><br>

    <!-- opdracht 8 -->
    <h3 id="naamopdrachtspinazie">Fruit shuffler</h3>
    <form method="get" action="#naamopdrachtspinazie">
        Fruitsoort <input type="text" name="fruitplus" required>
        <br><br>
        <input type="submit" value="toevoegen">
        <hr>
        <!-- VERANDEREN VOOR ONLINE ZETTEN -->
        
    </form>

    <a href="?arrayEdit=sort#naamopdrachtspinazie">
    <button name="arrayEdit" value="sort">Sorteer</button>
    </a>    
    <a href="?arrayEdit=shuffle#naamopdrachtspinazie">
    <button name="arrayEdit" value="shuffle">Schudden</button>
    </a>

    <br><br>
    <hr> 



    <?php
    $fruitarray=array();
    if(!isset($_SESSION['fruitarray'])) {
        $_SESSION['fruitarray'] = $fruitarray;
    }

    if(isset($_GET['fruitplus'])) {
        $fruitplus = $_GET['fruitplus'];
        array_push($_SESSION['fruitarray'], $fruitplus);
    }
        
    $fruitarray = $_SESSION['fruitarray'];

    if(isset($_GET['arrayEdit'])) {
        switch($_GET['arrayEdit']) {
            case "shuffle": 
                shuffle($fruitarray);
                break;
            case "sort":
                sort($fruitarray);
                break;
        }
    }    

    foreach($fruitarray as $item) {
        echo "- ".$item."<br>";
    }
    ?>
    <br><br>
    <h3 id="hoer">Stringfuncties</h3>
    <form method="get" action="#hoer">
        Tekst: <input type="text" name="tekst"required>
        <br>
        <input type="radio" name="tekstkeuze" checked value="allcaps" > In hoofdletters
        <br>
        <input type="radio" name="tekstkeuze" value="beta"> In kleine letters
        <br>
        <input type="radio" name="tekstkeuze" value="abn"> Eerste letter van de zin hoofdletter
        <br>
        <input type="radio" name="tekstkeuze" value="jaden"> Eerste letter van ieder woord hoofdletter
        <br><br>
        <input type="submit" value="weergeven">
    </form>

    <?php
    if(isset($_GET['tekstkeuze'])) {
        $tekst=$_GET['tekst'];
        switch($_GET['tekstkeuze']) {
            case "allcaps":
                echo "output: ".strtoupper($tekst);
                break;
            case "beta":
                echo "output: ".strtolower($tekst);
                break;
            case "abn":
                echo "output: ".ucfirst($tekst);
                break;
            case "jaden":
                echo "output: ".ucwords($tekst);
                break;
        }
    }
    ?>
    

    <div style="height: 200px;">
    </div>

</body>
</html>


