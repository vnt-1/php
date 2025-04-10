<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="n1">Digite o primeiro número</label>
        <input type="text" name="n1" required>

        <label for="n2">Digite o segundo número</label>
        <input type="text" name="n2" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        if ($n1 < $n2) {
            for ($i = $n1 + 1; $i < $n2; $i++) {
                echo "$i ";
            }
        } else if ($n2 < $n1) {
            for ($i = $n2 + 1; $i < $n1; $i++) {
                echo "$i ";
            }
        } else {
            echo "$n1";
        }
    }
    ?>
</body>

</html>