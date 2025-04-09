<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <form method="POST">
        <center>
            <h1>Calcular</h1><br>
            <label for="n1">Insira o primeiro número</label>
            <input type="number" id='n1' name="n1" required>

            <label for="n2">Insira o segundo número</label>
            <input type="number" id='n2' name="n2" required>

            <button type="submit" name='operacao' value="soma">+</button>
            <button type="submit" name='operacao' value="sub">-</button>
            <button type="submit" name='operacao' value="mult">x</button>
            <button type="submit" name='operacao' value="div">/</button>
        </center>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['operacao'];

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

        function Div($n1, $n2)
        {
            if ($n2 <= 0) {
                echo "Não é possivel dividir ";
            }
            return $n1 / $n2;
        }

        if ($op == 'soma') {
            $resultado = soma($n1, $n2);
        } else if ($op == 'sub') {
            $resultado = sub($n1, $n2);
        } else if ($op == 'mult') {
            $resultado = mult($n1, $n2);
        } else if ($op == 'div') {
            $resultado = div($n1, $n2);
        } else {
            $resultado = "operação invalida";
        }
        echo "<p style='text-align: center'> Resultado da operação: $resultado</p>";
    }
    ?>
</body>

</html>