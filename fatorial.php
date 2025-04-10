<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="num">Digite um número</label>
        <input type="text" name="num">

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $total = 1;

        for ($i = 1; $i <= $num; $i++) {
            $total *= $i;
        }

        echo "O fatorial de $num é: $total";
    }
    ?>
</body>

</html>