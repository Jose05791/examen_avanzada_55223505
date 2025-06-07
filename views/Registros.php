<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Nota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registrar Nueva Nota</h1>
    <form method="post" action="index.php?action=registrar">
        <label>Estudiante:</label><br>
        <input type="text" name="estudiante" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion" required></textarea><br><br>

        <label>Nota:</label><br>
        <input type="number" name="nota" step="0.01" min="0" max="100" required><br><br>

        <button type="submit">Registrar</button>
    </form>
    <br>
    <a href="index.php?action=listar">Volver al listado</a>
</body>
</html>
