<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora CBTIS 217</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <h1>Calculadora Básica</h1>
    <p>Ingresa dos números y selecciona la operación que deseas realizar.</p>

    <form action="calculadora.php" method="POST">
        <label>Número 1:</label><br>
        <input type="number" name="num1" step="any" required><br><br>

        <label>Número 2:</label><br>
        <input type="number" name="num2" step="any" required><br><br>

        <label>Operación:</label><br>
        <select name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $op = $_POST['operacion'];
        $resultado = 0;
        $error = "";

        if ($op == "suma") {
            $resultado = $n1 + $n2;
            echo "<h3>Resultado de la Suma: $n1 + $n2 = $resultado</h3>";
        } elseif ($op == "resta") {
            $resultado = $n1 - $n2;
            echo "<h3>Resultado de la Resta: $n1 - $n2 = $resultado</h3>";
        } elseif ($op == "multiplicacion") {
            $resultado = $n1 * $n2;
            echo "<h3>Resultado de la Multiplicación: $n1 × $n2 = $resultado</h3>";
        } elseif ($op == "division") {
            // Validación para no dividir entre cero
            if ($n2 == 0) {
                echo "<h3 style='color: red;'>Error: No se puede dividir entre cero.</h3>";
            } else {
                $resultado = $n1 / $n2;
                echo "<h3>Resultado de la División: $n1 ÷ $n2 = $resultado</h3>";
            }
        }
    }
    ?>
</body>
</html>
