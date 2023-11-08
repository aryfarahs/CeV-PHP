<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisões</title>
</head>
<body>
    <?php 
        $dividendo = $_GET["dd"] ?? 0;
        $divisor = $_GET["dv"] ?? 1;

    ?>

    <main>
        <h1>Dividindo Números</h1>  
        <form class="forml" action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dd">Dividendo:</label>
            <input type="number" name="dd" id="dd" min="0" value="<?=$dividendo?>">

            <label for="dv">Divisor:</label>
            <input type="number" name="dv" id="dv" min="1" value="<?=$divisor?>">

            <input class="butao" type="submit" value="Calcuar">
        </form>
    </main>

    <section>
        <h2>Estrutura da divisão</h2>
        <?php 

            $resto = $dividendo % $divisor;
            $quociente = intdiv($dividendo, $divisor);

            echo "<ul>";
            echo "<li>Dividendo: $dividendo</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>Quociente: $quociente</li>";
            echo "<li>Resto: $resto</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>