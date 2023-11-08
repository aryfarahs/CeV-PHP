<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultados Obtidos</h1>
    </header>

    <main>
        <p>
            <?php 
                $num = $_GET["num"];
                $suc = $num + 1;
                $ant = $num - 1;

                echo "O número digitado foi <strong>$num</strong><br>";
                echo "Seu antecessor é <strong>$ant</strong><br>";
                echo "Seu sucessor é <strong>$suc</strong>";
            ?>
        </p>

        <button class="butao" onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>