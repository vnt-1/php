<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="salario">Salário</label>
        <input type="text" name="salario" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario = $_POST["salario"];

        switch ($salario) {
            case $salario <= 300:
                $salario_reajustado = $salario * 1.5;
                echo "O reajuste do salário é $salario_reajustado";
                break;
            case $salario > 300:
                $salario_reajustado = $salario * 1.3;
                echo "O reajuste do salário é $salario_reajustado";
                break;
            case $salario < 0:
                echo "Salário inválido.";
                break;
        }
    }
    ?>
</body>

</html>