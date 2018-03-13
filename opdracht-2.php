<html>
<head>
<title>opdracht 1</title>
<link rel="stylesheet" type="text/css" href="formulierstylesheet.css">
</head>
<body>
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
</body>
</html>


