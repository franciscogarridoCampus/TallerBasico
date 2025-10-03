<?php 
$usuario = "admin"; // Cambia este valor a otro para ver el mensaje alternativo

// Array con varios productos
$productos = [
    [
        "nombre" => "HP",
        "precio" => "870",
        "url" => "https://www.hp.com/es-es/shop/Html/Merch/Images/c08522780_1750x1285.jpg"
    ],
    [
        "nombre" => "Dell",
        "precio" => "950",
        "url" => "https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/dell-plus/db16250/media-gallery/fpr/notebook-db16250nt-fpr-bl-gallery-2.psd?fmt=png-alpha&pscan=auto&scl=1&hei=804&wid=979&qlt=100,1&resMode=sharp2&size=979,804&chrss=full"
    ],
    [
        "nombre" => "Lenovo",
        "precio" => "780",
        "url" => "https://thumb.pccomponentes.com/w-530-530/articles/1083/10837514/2342-lenovo-v14-g4-iru-intel-core-i5-13420h-8gb-512gb-ssd-14-comprar.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Página Básica con Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Mi Sitio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Acerca de</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1>Bienvenido a mi sitio</h1>
            <p>Este es un ejemplo básico usando Bootstrap y PHP.</p>

            <?php if ($usuario == "admin"): ?>
                <div class="alert alert-success" role="alert">
                    Hola admin
                </div>
            <?php else: ?>
                <div class="alert alert-info" role="alert">
                    Hola usuario
                </div>
            <?php endif; ?>

            <div class="row">
                <?php 
                for ($i = 0; $i < count($productos); $i++): 
                    $producto = $productos[$i];
                ?>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="<?php echo $producto['url']; ?>" class="card-img-top" alt="Imagen de <?php echo htmlspecialchars($producto['nombre']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($producto['nombre']); ?></h5>
                                <p class="card-text">Precio: $<?php echo htmlspecialchars($producto['precio']); ?></p>
                                <a href="#" class="btn btn-primary">Comprar ahora</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="col-md-4">
            <h2>Noticias</h2>
            <p>Algunos contenidos adicionales en la barra lateral.</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
