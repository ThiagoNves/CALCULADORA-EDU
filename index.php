<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="" method="post">
        <label for="numero1"></label>
        <input type="text" name="numero1" required>

        <br><br>

        <label for="numero2"></label>
        <input type="text" name="numero2" required>
        
        <br><br>
        <label for="operacao"></label>
        <select name="operacao" id="operacao">
            <option value="somar">somar</option>
            <option value="subtrair">subtrair</option>
            <option value="dividir">dividir</option>
            <option value="multiplicar">multiplicar</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>