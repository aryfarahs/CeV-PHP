<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Valor Obtido</h1>
    </header>

    <main>
        <p>
            <?php
                $cotacao = 5.15;
                $real = $_GET['real'];
                $dolar = $real / $cotacao;

                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
                echo '<p>*Cotação fixa de 5.15</p>'
            ?>
        </p>

        <button class="butao" onclick="javascript:history.go(-1)">VOLTAR</button>
    </main>
</body>
</html>