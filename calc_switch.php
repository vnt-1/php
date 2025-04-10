<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <center>
            <h1>Calcular</h1><br>
            <label for="n1">Insira o primeiro número</label>
            <input type="number" name="n1" required>

            <label for="n2">Insira o segundo número</label>
            <input type="number" name="n2" required>

            <button type="submit" name='operacao' value="soma">+</button>
            <button type="submit" name='operacao' value="sub">-</button>
            <button type="submit" name='operacao' value="mult">x</button>
            <button type="submit" name='operacao' value="div">/</button>
        </center>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $op = $_POST["operacao"];
        $resultado = 0;

        function soma($n1, $n2)
        {
            return $n1 + $n2;
        }

        function sub($n1, $n2)
        {
            return $n1 - $n2;
        }
        function mult($n1, $n2)
        {
            return $n1 * $n2;
        }

        function div($n1, $n2)
        {
            if ($n2 == 0) {
                return "Não é possivel dividir ";
            }
            return $n1 / $n2;
        }

        switch ($op) {
            case $op == "soma":
                $resultado = soma($n1, $n2);
                break;
            case $op == "sub":
                $resultado = sub($n1, $n2);
                break;
            case $op == "mult":
                $resultado = mult($n1, $n2);
                break;
            case $op == "div":
                $resultado = div($n1, $n2);
                break;
        }

        echo "Resultado da operação: $resultado";
    }
    ?>
</body>

</html>