<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar - CBTIS 217</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1> Tablas de Multiplicar</h1>
    <p>Ingresa un número entero para generar su tabla del 1 al 10.</p>
    <form action="tabla.php" method="POST">
        <label>Número:</label><br>
        <input type="number" name="numero" required><br><br>
        <input type="submit" value="Generar Tabla">
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['numero'];
        echo "<h3>Tabla del $num</h3>";
        echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: center;'>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $num * $i;
            echo "<tr><td>$num x $i</td><td>=</td><td>$resultado</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>