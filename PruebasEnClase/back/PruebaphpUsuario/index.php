<?php
// Inicia o reanuda la sesión
session_start();

// Verifica si se envió un formulario para iniciar sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
    $_SESSION['usuario'] = $_POST['nombre'];
}

// Verifica si el usuario desea cerrar la sesión
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php"); // Redirige a la misma página (no a hola.php)
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Gestión de Sesiones en PHP</title>
</head>
<body>

<?php if (isset($_SESSION['usuario'])): ?>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?></h1>
    <p>Esta sesión está activa y almacena tu información.</p>
    <a href="?logout=true">Cerrar sesión</a>
    <br><br>
    <a href="hola.php">Ir a zona privada</a>
<?php else: ?>
    <h1>No hay una sesión activa</h1>
    <form method="post" action="index.php">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Iniciar sesión</button>
    </form>
<?php endif; ?>

</body>
</html>
