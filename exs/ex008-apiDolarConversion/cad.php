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
        <h1>Currency Converter v2.0</h1>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            $end = date("d/M/Y");
            $end = (DateTime::createFromFormat('d/M/Y', $end))->format('d-m-Y');
            $begin = date("d/M/Y", strtotime("-1 week"));
            $begin = (DateTime::createFromFormat('d/M/Y', $begin))->format('d-m-Y');
            $value = $_POST['value'];
            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$begin'&@dataFinalCotacao='$end'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra";
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados['value'][0]['cotacaoCompra'];
            $total = $value / $cotacao;
            echo "<p>Value in R$: <b>" . number_format($value, 2, ',', '.') . "</b></p>";
            echo "<p>Value in US$: <b>" . number_format(round($total, 2), 2, ',', '.') . "</b></p>";
        ?>
    </main>
</body>
</html>