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
        <h1>Gerando número aleatório com PHP</h1>
    </header>

    <main>
        <p>
            <?php
                $min = 0;
                $max = 100; 
                $num = rand($min, $max);

                echo "Gerando um número aleatório entre $min e $max... <br>";
                echo "O número escolhido foi <strong>$num</strong>";
            ?>
        </p>

        <button class="butao" onclick="javascript:document.location.reload()">Gerar número</button>
    </main>
</body>
</html>