<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultados</title>
</head>
<body>
    <header>
        <h1>Resultados Obtidos</h1>
    </header>

    <main style="color: black; text-align: center;">
        <?php 
            $nome = $_GET["name"] ?? "Sla";
            $sobrenome = $_GET["surname"] ?? "Estranho";
            echo "<p>É um prazer te conhecer  $nome $sobrenome!</p>"
        ?>

        <p><a href="javascript:history.go(-1)">VOLTAR</a></p>
    </main>

    <footer>

    </footer>
</body>
</html>