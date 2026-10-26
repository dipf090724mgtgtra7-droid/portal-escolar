<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluador - CBTIS 217</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <h1>Evaluador de Calificaciones</h1>
    <p>Ingresa una calificación (0 a 100) para conocer tu rendimiento.</p>
    <form action="evaluador.php" method="POST">
        <label>Calificación:</label><br>
        <input type="number" name="calificacion" min="0" max="100" required><br><br>
        <input type="submit" value="Evaluar">
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cal = $_POST['calificacion'];
        echo "<h3>Calificación: $cal</h3>";
        if ($cal >= 90 && $cal <= 100) { echo "<h2 style='color: green;'>Excelente</h2>"; }
        elseif ($cal >= 80 && $cal <= 89) { echo "<h2 style='color: blue;'>Muy bien</h2>"; }
        elseif ($cal >= 70 && $cal <= 79) { echo "<h2 style='color: orange;'>Satisfactorio</h2>"; }
        elseif ($cal >= 0 && $cal <= 69) { echo "<h2 style='color: red;'>No acreditado</h2>"; }
    }
    ?>
</body>
</html>