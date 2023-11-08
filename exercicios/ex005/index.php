<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Retroalimentação</title>
</head>
<body>
    
    <?php
            // Capturando os dados
            $valor1 = $_GET['v1'] ?? 0;
            $valor2 = $_GET['v2'] ?? 0;
    ?>

    <header>
        <h1>Somando Valores</h1>    
    </header>

    <main>
        <form class="forml" action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">

            <input class="butao" type="submit" value="Somar">
        </form>

    </main>

    <section>
        <p>
            <?php 
                $soma = $valor1 + $valor2;
                echo 'O resultado da soma é: ' . $soma
            ?>
        </p>
    </section>
</body>
</html>