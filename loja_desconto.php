<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="tipo">Tipo de cliente</label>
        <input type="text" name="tipo" required>

        <label for="valor">Valor do produto</label>
        <input type="text" name="valor" required>

        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo = $_POST["tipo"];
        $valor = $_POST["valor"];

        switch ($tipo) {
            case "funcionário":
                $total = $valor * 0.9;
                echo "Total a ser pago com desconto de funcionário: $total";
                break;
            case "vip":
                $total = $valor * 0.95;
                echo "Total a ser pago com desconto de vip: $total";
                break;
            default:
                echo "Total a ser pago cliente comum: $valor";
        }
    }
    ?>
</body>

</html>