<?php
// Inicia o reanuda la sesión
session_start();
// verifica si se envió un formulario para Iniciar sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
$_SESSION ['usuario']=$_POST['nombre'];
}
// Verifica si el usuario desea cerrar la sesión
if (isset($_GET['logout'])) {
session_destroy();
header("Location: hola.php"); // Redirige a la misma página
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
<?php if (isset($_SESSION ['usuario'])): ?>
<h1> Bienvenido, <?php echo htmlspecialchars($_SESSIONmarie['usuario']); ?> </h1>
<p>Esta sesión está activa y almacena tu información.</p>
<a href="?logout-true"> Cerrar sesión</a>
<?php else: ?>
<h1>No hay una sesión activa</hi>
<form method="post" action="hola.php">
<label for="nombre"> Introduce tu nombre: </label>
<input type="text" id="nombre" name="nombre" required>
<button type="submit"> Iniciar sesión</button>
</form>
<?php endif; ?>
</body>
</html>