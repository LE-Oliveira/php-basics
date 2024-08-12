<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $name = $_GET["nome"] ?? "Unknown";
            $surname = $_GET["sobrenome"] ?? "Traveler";
            echo "<p>It's a pleasuse to meet you, <b>$name $surname</b>! Welcome to my webpage</p>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">
                Voltar para a página anterior
            </a>
        </p>
    </main>
</body>
</html>