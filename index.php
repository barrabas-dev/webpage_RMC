<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de la Empresa - Inicio</title>
    <link rel="stylesheet" href="assets/css/style.css">
    </head>
<body>
    <!-- HEADER -->
    <header class="header">
        <nav class="nav">
            <div class="nav__logo">
                <div class="nav__logo-wrapper">
                     <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo de MiEmpresa">
                </a>
                </div>
            </div>
            <ul class="nav__menu">
                <li class="nav__item"><a href="#inicio" class="nav__link">Inicio</a></li>
                <li class="nav__item"><a href="#productos" class="nav__link">Productos</a></li>
                <li class="nav__item"><a href="#servicios" class="nav__link">Servicios</a></li>
                <li class="nav__item"><a href="#catalogos" class="nav__link">Catalogos</a></li>
                <li class="nav__item"><a href="#nosotros" class="nav__link">Nosotros</a></li>
            </ul>
            <div class="nav__toggle">
                <!-- Menú hamburguesa para móvil -->
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <main>
        <!-- SECCIÓN HERO -->
        <section id="inicio" class="hero">
            <div class="hero__media-background">
                <video class="hero__video" src="assets/img/rmc_reel_0.mp4" autoplay muted playsinline>
                    Tu navegador no soporta el elemento de video.
                </video>
                <img class="hero__image-fallback" src="assets/img/hero-background.png" alt="Fondo complementario de la empresa">
            </div>
            <div class="hero__overlay"></div>
            <div class="hero__content container">
                <h1 class="hero__title">
                    <span class="hero__title-white">Al servicio de</span><br>
                    <span class="hero__title-yellow">Dos</span> <span class="hero__title-blue">países</span> <span class="hero__title-red">hermanos.</span>
                </h1>
                <p class="hero__description">
                    Somos una empresa especializada en la comercialización de repuestos para automotores, ensamblaje de mangueras hidráulicas, racores y suministros de ferretería. Contamos con un equipo de profesionales altamente calificados y comprometidos en brindar soluciones eficientes y personalizadas para cada cliente.
                </p>
                <a href="#contacto" class="hero__cta-btn">Solicitar una Asesoría</a>
            </div>
        </section>

        <!-- SECCIÓN PRODUCTOS -->
        <section id="productos" class="products">
            <div class="container">
                <h2 class="section__title">Nuestros Productos</h2>
                <div class="products__grid">
                    <!-- 16 elementos, se mostrarán 8 inicialmente -->
                    <!-- Producto 1 -->
                    <div class="product__card">
                        <img src="assets/images/products/producto-1.jpg" alt="Producto 1" class="product__image">
                        <h3 class="product__title">Nombre Producto 1</h3>
                    </div>
                    
                    <!-- Producto 2 -->
                    <div class="product__card">
                        <img src="assets/images/products/producto-2.jpg" alt="Producto 2" class="product__image">
                        <h3 class="product__title">Nombre Producto 2</h3>
                    </div>
                    
                    <!-- Productos 3 al 8 (visibles inicialmente) -->
                    <div class="product__card">
                        <img src="assets/images/products/producto-3.jpg" alt="Producto 3" class="product__image">
                        <h3 class="product__title">Nombre Producto 3</h3>
                    </div>
                    
                    <!-- ... productos 4 al 8 ... -->
                    
                    <!-- Productos 9 al 16 (ocultos inicialmente) -->
                    <div class="product__card product__card--hidden">
                        <img src="assets/images/products/producto-9.jpg" alt="Producto 9" class="product__image">
                        <h3 class="product__title">Nombre Producto 9</h3>
                    </div>
                    
                    <!-- ... productos 10 al 16 ... -->
                </div>
                <button class="products__load-more">Ver más productos</button>
            </div>
        </section>

        <!-- SECCIÓN SERVICIOS -->
        <section id="servicios" class="services">
            <div class="container">
                <h2 class="section__title">Nuestros Servicios</h2>
                <div class="services__flex">
                    <!-- Servicio 1 -->
                    <div class="service__card">
                        <img src="assets/images/services/servicio-1.jpg" alt="Servicio 1" class="service__image">
                        <h3 class="service__title">Servicio 1</h3>
                    </div>
                    
                    <!-- Servicio 2 -->
                    <div class="service__card">
                        <img src="assets/images/services/servicio-2.jpg" alt="Servicio 2" class="service__image">
                        <h3 class="service__title">Servicio 2</h3>
                    </div>
                    
                    <!-- Servicio 3 -->
                    <div class="service__card">
                        <img src="assets/images/services/servicio-3.jpg" alt="Servicio 3" class="service__image">
                        <h3 class="service__title">Servicio 3</h3>
                    </div>
                    
                    <!-- Servicio 4 -->
                    <div class="service__card">
                        <img src="assets/images/services/servicio-4.jpg" alt="Servicio 4" class="service__image">
                        <h3 class="service__title">Servicio 4</h3>
                    </div>
                    
                    <!-- Servicio 5 -->
                    <div class="service__card">
                        <img src="assets/images/services/servicio-5.jpg" alt="Servicio 5" class="service__image">
                        <h3 class="service__title">Servicio 5</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECCIÓN SEDES -->
        <section id="sedes" class="locations">
            <div class="container">
                <h2 class="section__title">Nuestras Sedes</h2>
                <div class="locations__grid">
                    <!-- Sede 1 -->
                    <div class="location__card">
                        <img src="assets/images/locations/sede-1.jpg" alt="Sede 1" class="location__image">
                        <div class="location__content">
                            <h3 class="location__title">Sede Principal</h3>
                            <p class="location__description">Descripción de la sede, dirección, horarios de atención y características principales.</p>
                            <div class="location__map">
                                <!-- Mapa de Google Maps embebido -->
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d-75.561905585734!3d6.201646895501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDUuOSJOIDc1wrAzMyczMi44Ilc!5e0!3m2!1ses!2sco!4v1620000000000!5m2!1ses!2sco" 
                                    width="100%" 
                                    height="200" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sede 2 -->
                    <div class="location__card">
                        <img src="assets/images/locations/sede-2.jpg" alt="Sede 2" class="location__image">
                        <div class="location__content">
                            <h3 class="location__title">Sede Norte</h3>
                            <p class="location__description">Descripción de la sede norte, dirección, horarios y servicios específicos.</p>
                            <div class="location__map">
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d-75.561905585734!3d6.201646895501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDUuOSJOIDc1wrAzMyczMi44Ilc!5e0!3m2!1ses!2sco!4v1620000000000!5m2!1ses!2sco" 
                                    width="100%" 
                                    height="200" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Agregar más sedes según sea necesario -->
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__section">
                    <h3>Contacto</h3>
                    <p>Email: info@empresa.com</p>
                    <p>Teléfono: +57 123 456 7890</p>
                </div>
                <div class="footer__section">
                    <h3>Enlaces rápidos</h3>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#productos">Productos</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                    </ul>
                </div>
                <div class="footer__section">
                    <h3>Redes sociales</h3>
                    <!-- Iconos de redes sociales -->
                </div>
            </div>
            <div class="footer__bottom">
                <p>&copy; 2024 Nombre de la Empresa. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>