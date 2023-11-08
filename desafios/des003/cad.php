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
                $inicio = date("m-d-Y", strtotime("- 7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);
                $cotacao = $dados["value"][0]["cotacaoCompra"];
            

                $real = $_GET['real'];
                $dolar = $real / $cotacao;

                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
                echo '<p>*Cotação em tempo real feita pelo <a href="https://www.bcb.gov.br" target="_blank">Banco Central do Brasil</a></p>'
            ?>
        </p>

        <button class="butao" onclick="javascript:history.go(-1)">VOLTAR</button>
    </main>
</body>
</html>