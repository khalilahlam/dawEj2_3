<?php
// Recibe datos del formulario y los muestra
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevoModulo = trim($_POST["nuevoModulo"]);
    if(!empty($nuevoModulo)) {
        echo "<h2>Nuevo módulo recibido:</h2>";
        echo "<p>" . htmlspecialchars($nuevoModulo) . "</p>";
        echo '<p><a href="index.html">Volver a la lista</a></p>';
    } else {
        echo "<p>No se ha recibido ningún módulo.</p>";
        echo '<p><a href="index.html">Volver</a></p>';
    }
} else {
    header("Location: index.html");
    exit;
}
?>
