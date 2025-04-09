<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem</title>
</head>

<body>
    <form method="POST">
        <label for="a">Insira o número A</label>
        <input type="number" id="a" name="a" required>

        <label for="b">Insira o número B</label>
        <input type="number" id="b" name="b" required>

        <button type="submit" name="resultado" value="">Ordenar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];

        if ($a > $b) {
            echo "$b<br>";
            echo $a;
        } else {
            echo "$a<br>";
            echo $b;
        }
    }
    ?>

</body>

</html>