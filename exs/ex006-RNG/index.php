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
        <h1>Working with RGN</h1>
        <?php 
            echo "Generating a random number between 1 and 100...<br>";
            $number = rand(1, 100);
            echo "The chosen number is <b>$number</b><br>";
            echo "<button onclick='window.history.go(0)'>\u{1F504}
Try Again</button>";
        ?>
    </main>
</body>
</html>