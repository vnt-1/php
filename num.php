<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Número</h1>

    <form method="POST">
        <label for="n1">Insira um número</label>
        <input type="number" id="n1" name="n1">

        <button type="submit" name="resultado" value="">Enviar</button>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){$n1=$_POST["n1"];function showResult($resultado){echo "Resultado da operação: $resultado";}if($n1>0){showResult("Positivo");}elseif($n1==0){showResult("Valor igual a zero");}else{showResult("Valor negativo");}}
    ?>




</body>

</html>