<html>
<head>
<title>opdracht 1</title>
<link rel="stylesheet" type="text/css" href="formulierstylesheet.css">
</head>
<body>
    <form method="GET">
        Bedrag exclusief BTW
        <input type="number" name="exclBTW" min="0" required>
        <br>
        <input type="radio" name="BTW" value="1.06">Laag, 6%
        <br>
        <input type="radio" name="BTW" value="1.21">Hoog, 21%
        <br>
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

</body>
</html>


