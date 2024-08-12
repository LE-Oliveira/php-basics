<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <?php 
            $number = $_GET["number"] ?? 0;
            echo "<p>The chosen number is <b>$number</b></p>";
            echo "<p>Its <i>predecessor</i> is ".($number-1)."</p>";
            echo "<p>Its <i>successor</i> is ".($number+1)."</p>";
            echo "<button onclick='window.history.go(-1)'>\u{1F519}Back</button>";
        ?>
    </main>
</body>
</html>