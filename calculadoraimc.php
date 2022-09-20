<!--Nome: Wesley Araujo-->
<!--Engenharia de Software-->
<!--UNIGRAN Net-->

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>

<body>
    <form action="" method="post">
        Digite o Peso: <input name="peso" type="text" />
        Digite a Altura: <input name="altura" type="text" />        
        <input type="submit" value="Calcular" />
    </form>

    <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        function imc($altura, $peso)
        {
            $altura = str_replace(',', '.', $altura);
            $result = $altura * $altura / $peso;
            return $result;
        }

        echo "seu imc é: " . imc($altura, $peso);
    ?>
</body>

</html>