<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="str">Digite uma palavra</label>
        <input type="text" name="str" required>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];

        $n2 = strlen($str);
        $n1 = 0;

        echo "A string é: $str<br>";
        echo "Caracteres totais = $n2<br>";

        if ($n1 < $n2) {
            for ($i = $n1 + 1; $i < $n2; $i++) {
                echo "$i ";
            }
        } else if ($n2 < $n1) {
            for ($i = $n2 + 1; $i < $n1; $i++) {
                echo "$i ";
            }
        } else {
            echo "Não há números intermediários entre dois números iguais.";
        }
    }
    ?>
</body>

</html>