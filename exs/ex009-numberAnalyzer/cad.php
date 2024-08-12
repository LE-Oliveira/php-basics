<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            $number = $_POST['number'];
            $int = intdiv($number, 1);
            $decimal = round($number - $int, 3);
            echo "<p>Analyzing number " . number_format($number, 3, ',', '.') . " informed by user</p>";
            echo "<ul> 
                    <li>Integer part of the chosen number: " . number_format($int, 0, ',', '.') . "</li>
                    <li>Decimal part of the chosen number: $decimal</li>
                </ul>";
        ?>
    </main>
</body>
</html>