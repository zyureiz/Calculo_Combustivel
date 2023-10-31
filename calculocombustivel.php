<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Viagem</title>
</head>
<body>
    <h1>Calculo de Viagem</h1>
    <form method="get">
        <label for="distancia">Distância até a casa da irmã (em km):</label>
        <input type="text" name="distancia" id="distancia" required><br>

        <label for="consumo">Consumo de combustível do carro (em km/litro):</label>
        <input type="text" name="consumo" id="consumo" required><br>

        <label for="preco_gasolina">Preço da gasolina (por litro):</label>
        <input type="text" name="preco_gasolina" id="preco_gasolina" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if(isset($_GET['distancia']) && isset($_GET['consumo']) && isset($_GET['preco_gasolina'])) {
        $distancia = floatval($_GET['distancia']);
        $consumo = floatval($_GET['consumo']);
        $preco_gasolina = floatval($_GET['preco_gasolina']);

        $litros_necessarios = $distancia / $consumo;
        $valor_gasto = $litros_necessarios * $preco_gasolina;

        echo "<h2>Resultados da Viagem</h2>";
        echo "Distância: $distancia km<br>";
        echo "Consumo do carro: $consumo km/litro<br>";
        echo "Preço da gasolina: R$ $preco_gasolina por litro<br>";
        echo "Litros de gasolina necessários: $litros_necessarios litros<br>";
        echo "Valor a ser gasto: R$ $valor_gasto";
    }
    ?>
</body>
</html>