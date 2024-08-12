<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
        $num = 0x1A;
        echo "O valor da variável numérica é $num";
        echo "<br>";

        $v = (integer) "1457";
        var_dump($v);
        echo "<br>";
        
        $booleana = false;
        echo "A variável booleana é $booleana";
        echo "<br>";

        $vet = [6, 1, 8, 3, 6];
        var_dump($vet);
        echo "<br>";

        class Pessoa {
            private string $nome;
            function __construct($teste) {
                $this->nome = $teste;
            }
        }
        $p = new Pessoa("Lucas");
        var_dump($p);
        echo "<br>";

        $nowDoc = "HereDoc";
        echo <<< TEXTO
            Isso é um texto $nowDoc
        TEXTO;
        echo "<br>";
        
        echo <<< 'TEXTO'
            Isso é um texto $nowDoc
        TEXTO;
        echo "<br>";
    ?>
</body>
</html>