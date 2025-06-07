<?php include "views/header.php"; ?>
<h2>Lista de Notas</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Estudiante</th>
        <th>Descripción</th>
        <th>Nota</th>
    </tr>
    <?php foreach ($notas as $fila): ?>
        <tr>
            <td><?= $fila['id'] ?></td>
            <td><?= $fila['estudiante'] ?></td>
            <td><?= $fila['descripcion'] ?></td>
            <td><?= $fila['nota'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<p><strong>Promedio General:</strong> <?= round($promedio, 2) ?></p>
<?php include "views/footer.php"; ?>
