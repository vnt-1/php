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
        <input type="text" name="num" required>

        <button type="submit">Enviar</button>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];
            for ($i = 0; $i <= $num; $i++) {
                echo "$i ";
            }
        }
        ?>
    </form>
</body>

</html>