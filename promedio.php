<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio - CBTIS 217</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <h1>Calculadora de Promedio</h1>
    <p>Ingresa tus tres calificaciones parciales.</p>

    <form action="promedio.php" method="POST">
        <label>Calificación 1:</label><br>
        <input type="number" name="cal1" min="0" max="100" required><br><br>

        <label>Calificación 2:</label><br>
        <input type="number" name="cal2" min="0" max="100" required><br><br>

        <label>Calificación 3:</label><br>
        <input type="number" name="cal3" min="0" max="100" required><br><br>

        <input type="submit" value="Calcular Promedio">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $c1 = $_POST['cal1'];
        $c2 = $_POST['cal2'];
        $c3 = $_POST['cal3'];

        $promedio = ($c1 + $c2 + $c3) / 3;
        
        $promedio_formateado = round($promedio, 1);

        echo "<h3>Tu promedio final es: $promedio_formateado</h3>";

        if ($promedio >= 70) {
            echo "<h2 style='color: green;'>Felicidades, estás APROBADO.</h2>";
        } else {
            echo "<h2 style='color: red;'>Lo sentimos, estás REPROBADO.</h2>";
        }
    }
    ?>
</body>
</html>
