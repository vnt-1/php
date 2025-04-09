<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>

<body>
    <form method="POST">
        <label for="mes">Insira o número para mostrar o mês</label>
        <input type="number" id="mes" name="mes" required>

        <button type="submit" name="resultado" value="">Ordenar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = [1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro"];
        $month_number = $_POST["mes"];

        if ($month_number > 12 || $month_number < 1) {
            echo "Não existe mês com esse número.";
        } else {
            echo $month[$month_number];
        }
    }
    ?>
</body>

</html>