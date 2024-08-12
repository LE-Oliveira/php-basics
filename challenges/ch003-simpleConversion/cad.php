<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            $money = $_GET["money"] ?? 0;
            $converted = [
                "dollar" => 5.41,
                "euro" => 6.57,
                "pound" => 7.21,
                "yen" => 0.049,
                "yuan" => 0.78
            ];
            echo "<p> Your R$ $money values in other currencies are: </p>";
            echo "<table border='1'>
                    <tr>
                        <th> Currency </th>
                        <th> Value </th>
                    </tr>";
            foreach($converted as $currency => $value){
                $result = round(($money / $value),2);
                echo "<tr>
                        <td> $currency </td>
                        <td> $result </td>
                    </tr>";
            }
            echo "</table>";
            echo "<button onClick='window.history.go(-1)'> Back </button>";
        ?>
    </main>
</body>
</html>