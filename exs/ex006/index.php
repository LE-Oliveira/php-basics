<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Value Adder</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Value 1</label>
            <input type="number" name="v1" id="id_v1" value=<?=$v1?>>
            <label for="v2">Value 2</label>
            <input type="number" name="v2" id="id_v2" value=<?=$v2?>>
            <input type="submit" value="Sum">
        </form>
    </main>
    <section id="result">
        <h2>Result</h2>
        <?php 
            $sum = $v1 + $v2;
            echo "<p>$sum</p>"; ?>
    </section>
</body>
</html>