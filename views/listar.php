<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Notas</title>
    <link rel="styles" href="assets/style.css">
</head>
<body>
    <h1>Listado de Notas</h1>
    <a href="index.php?action=registrar">Registrar Nueva Nota</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Descripción</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notas as $nota): ?>
                <tr>
                    <td><?= htmlspecialchars($nota['estudiante']) ?></td>
                    <td><?= htmlspecialchars($nota['descripcion']) ?></td>
                    <td><?= htmlspecialchars($nota['nota']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2"><strong>Promedio General</strong></td>
                <td><strong><?= number_format($promedio, 2) ?></strong></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>