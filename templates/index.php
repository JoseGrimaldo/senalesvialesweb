<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Somos una empresa ubicada en la ciudad de Guadalupe, Nuevo León, especializada en el campo de la señalizacion vial, semaforización, asi como también en publicidad.  En Señales Viales y Publicidad, nos complacemos en atender a todos nuestros clientes con la mejor actitud de servicio, siendo proveedores de un producto de primera clase, con precios accesibles e inmejorables. Trabajamos con material de la mejor calidad, tambien contamos con un equipo de trabajo siempre dispuesto a producir productos qe excedan las expectativas de cada cliente." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Señales Viales</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../static/css/normalize.css"/>
    <link rel="stylesheet" href="../static/css/style.css" />
    <link rel="stylesheet" href="../static/css/animate.css" />
</head>
<body>
    <header class="Header" id="home">
        <nav class="MainMenu">
            <img src="../static/img/f2.png" class="MainMenu-img">
            <ul class="MainMenu-list">
                <li class="MainMenu-item">
                    <a href="#home" class="MainMenu-link page-scroll">Home</a>
                </li>
                <li class="MainMenu-item">
                    <a href="#nosotros" class="MainMenu-link page-scroll">Nosotros</a>
                </li>
                <li class="MainMenu-item">
                    <a href="#servicio" class="MainMenu-link page-scroll">Servicio</a>
                </li>
                <li class="MainMenu-item">
                    <a href="#contacto" class="MainMenu-link page-scroll">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="container-slogan">
            <img src="../static/img/logo.png" alt="imagen-logotipo" class="header-logo"/>
            <span class="Header-slogan">Dalo por hecho...</span>
        </div>
    </header>
    <section class="Nosotros" id="nosotros">
        <header class="u-cabeceraSeccion">
            <h1 class="u-tituloSeccion">Nosotros</h1>
            <img src="../static/img/nosotros-header.jpg" alt="header-nosotros" class="nosotros-imagenCabecera">
        </header>
        <article class="nosotros-informacion">
            <p>Somos una empresa ubicada en la ciudad de Guadalupe, Nuevo León, especializada en el campo de la señalización vial, semaforización, así como también en publicidad. En Señales Viales y Publicidad, nos complacemos en atender a todos nuestros clientes con la mejor actitud de servicio, siendo proveedores de un producto de primera clase, con precios accesibles e inmejorables. Trabajamos con material de la mejor calidad, también contamos con un equipo de trabajo siempre dispuesto a producir productos que excedan las expectativas de cada cliente.</p>
        </article>
        <div class="nosotros-valores wow bounceInLeft" >
            <article class="nosotros-mision">
                <h2>Misión</h2>
                <p>Comprometernos con nuestros clientes a darles soluciones de calidad, efectivas en menos tiempo y a un precio justo. Crecer día a día, tanto individualmente como parte de la empresa.</p>
            </article>
            <article class="nosotros-vision">
                <h2>Visión</h2>
                <p>Ser una empresa líder en el campo de la señalización vial, cumpliendo con normas y estándares de calidad internacional, excediendo las expectativas de nuestros clientes.</p>
            </article>
        </div>
    </section>
    <section class="Servicios" id="servicio">
        <header class="u-cabeceraSeccion">
            <h1 class="u-tituloSeccion">Servicios</h1>
        </header>
        <div class="servicios-container">
            <article class="servicios-semaforizacion">
                <div class="semaforizacion-container">
                    <h2>Semaforización</h2>
                    <p>Manejamos lo mas actual en tecnología vial e innovamos día con día para estar a la vanguardia de las necesidades de cada cliente.</p>
                </div>
            </article>
            <div>
                <article class="servicios-senales">
                    <div class="senales-container">
                        <h2>Señalización</h2>
                        <p>Fabricamos señaletica para exteriores e interiores, con materiales de alta calidad y durabilidad, así como también la instalación de estas.</p>
                    </div>
                </article>
                <article class="servicios-pintura">
                    <div class="pintura-container">
                        <h2>Pintura Vial</h2>
                        <p>Aplicación de pintura para asfalto en todas sus variantes ya sea tipo tráfico o termoplástica con las herramientas adecuadas.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="Contacto" id="contacto">
        <header class="u-cabeceraSeccion">
            <h1 class="u-tituloSeccion">Contacto</h1>
        </header>
        <img src="../static/img/sobre.png" class="contacto-imagen" alt="contactoImagen">
        <form name="sentMessage" class="contacto-formulario" action="../static/mail/contacto.php" method="post">
            <input id="nombre" name="nombre" type="text" placeholder="Nombre *" class="contacto-formulario-item" required />
            <input id="telefono" name="telefono" type="tel" placeholder="Teléfono *" class="contacto-formulario-item" required />
            <input id="email"type="email" name="email" placeholder="Email *" class="contacto-formulario-item" required />
            <textarea id="mensaje" name="mensaje" rows="2" placeholder="Mensaje *" class="contacto-formulario-texto" required></textarea>
            <button type="submit" name="submit" class="contacto-formulario-submit">Enviar Mensaje</button>
        </form>
    </section>
    <section id="map" class="map"></section>
    <footer class="Footer">
        <div class="Footer-container">
            <article class="Footer-itemInfo">
                <h3>Dirección</h3>
                <p>Calle Valencia Guadalupe Nuevo Leon</p>
            </article>
            <article class="Footer-itemInfo">
                <h3>Email</h3>
                <p>senalesviales_efrain@hotmail.com / svyp_cruz@hotmail.com</p>
            </article>
            <article class="Footer-itemInfo">
                <h3>Teléfono</h3>
                <p>(81) 1877-4888 / (81) 2126-4466</p>
            </article>
        </div>
        <div class="Footer-developer">
            <span>Aviso de Privacidad</span>
            <span>Desarrollado por Grafmex</span>
        </div>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="../static/js/maps.js"></script>
    <script src="../static/js/jquery.js"></script> 
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../static/js/easing.js"></script>
    <script src="../static/js/wow.min.js"></script>
    <script src="../static/js/wow-init.js"></script>
</body>
    
</html>