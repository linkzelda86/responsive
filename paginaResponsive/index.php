<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Establece el tipo de documento como HTML5 -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 para admitir caracteres especiales -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta la escala de la página según el ancho del dispositivo para hacerla responsiva -->
    <title>Página Responsive con Bootstrap 5</title> <!-- Título de la página que aparece en la pestaña del navegador -->
    
    <!-- Importando Bootstrap 5 CSS desde un CDN para tener estilos prediseñados y hacer la página responsiva -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Enlace a un archivo de estilos CSS personalizado (estilos.css) para agregar o modificar estilos adicionales -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- Navbar o barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark"> <!-- Barra de navegación que se expande en pantallas grandes, con color oscuro -->
        <div class="container"> <!-- Centra el contenido del navbar en un contenedor -->
            <a class="navbar-brand" href="index.php">AUDIOMAX</a> <!-- Logotipo de la empresa que enlaza a la página de inicio -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Botón para abrir/cerrar el menú en pantallas pequeñas -->
                <span class="navbar-toggler-icon"></span> <!-- Ícono del botón desplegable del menú en pantallas pequeñas -->
            </button>
            <div class="collapse navbar-collapse" id="navbarNav"> <!-- Menú que se colapsa en pantallas pequeñas -->
                <ul class="navbar-nav ms-auto"> <!-- Lista de enlaces de navegación alineada a la derecha con "ms-auto" -->
                    <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li> <!-- Enlace al inicio -->
                    <li class="nav-item"><a class="nav-link" href="Caracteristicas.html">Características</a></li> <!-- Enlace a la sección de características -->
                    <li class="nav-item"><a class="nav-link" href="Contacto.html">Contacto</a></li> <!-- Enlace a la sección de contacto -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de Hero (principal) con mensaje de bienvenida -->
    <header class="hero-section text-center py-5"> <!-- Hero con texto centrado y espaciado vertical con py-5 -->
        <div class="container">
            <h1 class="display-4">Bienvenidos a AudioMax</h1> <!-- Título principal de la página -->
            <p class="lead">Explora nuestro contenido y conoce lo que tenemos para ofrecer.</p> <!-- Descripción breve -->
            <a class="btn btn-outline-light btn-lg" href="Caracteristicas.html">Conoce Mas</a> <!-- Botón que lleva a la sección de características -->
        </div>
    </header>

    <!-- Sección de tarjetas para mostrar productos -->
    <section class="container my-5"> <!-- Sección centrada con margen vertical my-5 -->
        <h2 class="text-center text-primary mb-4">Nuestros Productos</h2> <!-- Título de la sección en azul y centrado -->
        <div class="row"> <!-- Fila que contiene las tarjetas de los productos -->
            <div class="col-md-4"> <!-- Columna que ocupa 4/12 en pantallas medianas -->
                <div class="card mb-4"> <!-- Tarjeta con margen inferior -->
                    <img src="img/3.webp" class="card-img-top" alt="Imagen 1"> <!-- Imagen en la parte superior de la tarjeta -->
                    <div class="card-body">
                        <h5 class="card-title">Audiculares Adol</h5> <!-- Título del producto -->
                        <p class="card-text">Auriculares intrauditivos Adol con función táctil de cancelación activa de ruido, auriculares inalámbricos con micrófono incorporado.</p> <!-- Descripción del producto -->
                        <a href="#" class="btn btn-outline-primary">Leer Más</a> <!-- Botón para obtener más información -->
                    </div>
                </div>
            </div>
            <!-- Repite el mismo formato para los otros productos -->
            <div class="col-md-4"> <!-- Columna de tamaño mediano (4 columnas en pantallas medianas y más grandes) -->
                <div class="card mb-4"> <!-- Tarjeta con margen inferior de 4 unidades -->
                    <img src="img/2.webp" class="card-img-top" alt="Imagen 2"> <!-- Imagen en la parte superior de la tarjeta, con descripción alternativa "Imagen 2" -->
                    <div class="card-body"> <!-- Cuerpo de la tarjeta donde se coloca el contenido textual -->
                        <h5 class="card-title">ASUS Adol</h5> <!-- Título del producto dentro de la tarjeta -->
                        <p class="card-text">Adol TWS Inalámbricos In-ear Calidad de Sonido Inmersiva, Función de Control Táctil de Auriculares, Micrófono Interior con Tapa de Carga para Auriculares.</p> <!-- Descripción del producto -->
                        <a href="#" class="btn btn-outline-primary">Leer Más</a>  <!-- Botón de enlace para ver más detalles con un estilo de borde primario (azul) -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">  <!-- Otra columna de tamaño mediano (4 columnas en pantallas medianas y más grandes) -->
                <div class="card mb-4"> <!-- Otra tarjeta con margen inferior de 4 unidades -->
                    <img src="img/1.jpg" class="card-img-top" alt="Imagen 3"> <!-- Imagen en la parte superior de la tarjeta, con descripción alternativa "Imagen 3" -->
                    <div class="card-body"> <!-- Cuerpo de la tarjeta donde se coloca el contenido textual -->
                        <h5 class="card-title">PICUN F1</h5> <!-- Título del producto dentro de la tarjeta -->
                        <p class="card-text">Audifonos Picun con cancelacion de ruido activa o pasiva, ideal para escuchar tu musica favorita con el mejor sonido.</p> <!-- Descripción del producto -->
                        <a href="#" class="btn btn-outline-primary">Leer Más</a> <!-- Botón de enlace para ver más detalles con un estilo de borde primario (azul) -->
                    </div>
                </div>
            </div>
        </div>
    </section>   

    <!-- Footer -->
    <footer class="text-white text-center py-3"> <!-- Pie de página con texto en blanco, centrado y con padding vertical -->
    <div class="container"> <!-- Contenedor para centrar y limitar el ancho del contenido -->
        <p class="mb-0">&copy; 2023 AudioMax. Todos los derechos reservados.</p> <!-- Texto del pie de página con margen inferior de 0 -->
    </div>
</footer>

<!-- Importando Bootstrap 5 JavaScript desde un CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> <!-- Incluye los scripts de Bootstrap para funcionalidad dinámica -->
</body>
</html>
