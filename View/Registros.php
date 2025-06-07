<?php include "views/header.php"; ?>
<form method="POST">
    <label>Estudiante:</label><br>
    <input type="text" name="estudiante" required><br>

    <label>Descripción:</label><br>
    <input type="text" name="descripcion" required><br>

    <label>Nota:</label><br>
    <input type="number" name="nota" step="0.01" required><br><br>

    <button type="submit">Guardar Nota</button>
</form>
<?php include "views/footer.php"; ?>