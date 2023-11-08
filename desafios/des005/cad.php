<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisando Valores</title>
</head>
<body>
    <header>
        <h1>Resultados</h1>
    </header>

    <main>
        <p>
            <?php 
                
                $num = $_GET['num'] ?? 0;
                $intnum = (int)$num ;
                $decnum = $num - $intnum;
                
                echo "Você digitou o número " . number_format($num, 3, ",", ".") . "<br><br>";
                echo "A parte <strong>INTEIRA</strong> é: " . number_format($intnum, 0, ",", ".") . "<br>";
                echo "A parte <strong>DECIMAL</strong> é: " . number_format($decnum, 3, ",", ".");

            ?>
        </p>

        <button class="butao" onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>