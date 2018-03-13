<div class="<?php 
        if(isset($_GET['color'])) {
            echo $_GET['color'];
        }
    ?> 
jumbotron">
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