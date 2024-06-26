<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturas America EIRL</title>
    <link rel="icon" type="image/png" href="./pics/logo-man.png">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://kit.fontawesome.com/326d6d93eb.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="box-right">
            <nav class="nav-right">
                <figure class="card-logo">
                    <img class="img" src="./pics/logotipo.png" alt="logo">
                </figure>
                <ul class="menu-horizontal">
                    <li><a class="primary" href="#">Inicio</a></li>
                    <li><a class="primary" href="./Screens/nosotros.php">Nosotros</a></li>
                    <li>
                        <a class="secondary" href="#procesos">Procesos<i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu-vertical">
                            <li><a href="./Screens/process.php#desarrollo">Desarrollo</a></li>
                            <li><a href="./screens/process.php#bordado">Bordado</a></li>
                            <li><a href="./Screens/process.php#corte">Corte</a></li>
                            <li><a href="./Screens/process.php#costura">Costura</a></li>
                            <li><a href="./Screens/process.php#acabados">Acabados</a></li>
                            <li><a href="./Screens/process.php#despacho">Despacho</a></li>
                        </ul>
                    </li>
                    <li><a class="primary" href="./Screens/tienda.php">Tienda</a></li>
                    <li><a class="primary" href="./Screens/contacto.php">Contáctenos</a></li>
                </ul>
                <ul class="icons-horizontal">
                    <li>
                        <a class="secondary" href="#">
                            <i class="fa-solid fa-circle-user"></i>
                            <?php
                                if (isset($_SESSION['nombre_completo'])) {
                                    echo htmlspecialchars($_SESSION['nombre_completo']);
                                }
                            ?>
                        </a>
                        <ul class="icons-vertical">
                            <li><a href="./Screens/perfil.php">Ver perfil</a></li>
                            <li><a href="./php/logout.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>Carrito</a></li>
                </ul>
            </nav>
        </div>
        <div class="box-left">
            <nav class="nav-left">
                <div class="info-details">
                    <ul class="op-found">
                        <li><i class="fa-solid fa-phone"></i>+51 923 232 414</li>
                        <li><i class="fa-regular fa-envelope"></i>nenes@manufacturasamerica.com</li>
                        <li><i class="fa-solid fa-location-dot"></i>Av. Los Castillos 504, Lima 15023</li>
                    </ul>
                </div>
                <div class="social-details">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </nav>
        </div>
    </header>
    <main class="main">
        <section class="first-part">
            <section class="one-box">
                <div class="descrip-left">
                    <h2>Manufacturas America E.I.R.L</h2>
                    <h1 class="sub-h2">Nunca puedes equivocarte con nuestra calidad</h1>
                    <p class="parrafo">Desde nuestros procesos de producción hasta nuestras ultimas colecciones, te invitamos a explorar como hacemos posible la moda de calidad con pasión y compromiso</p>
                </div>
                <div class="descrip-right">
                    <button class="initial-button" type="button" onclick="location.href='./Screens/nosotros.php'">DESCUBRE MAS</button>
                </div>
                <div class="card-info">
                    <div class="card">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                        <div class="front-text">
                            <h2 class="tittle-h2">Excelente Material</h2>
                            <p class="parrafo">Nuestro compromiso con la calidad comienza con la selección de material premium.</p>
                        </div>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-star"></i>
                        <div class="front-text">
                            <h2 class="tittle-h2">Calidad de Producto</h2>
                            <p class="parrafo"> Desde el diseño hasta la entrega, cada paso impregnado de meticulosa atención al detalle.</p>
                        </div>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-leaf"></i>
                        <div class="front-text">
                            <h2 class="tittle-h2">Confiabilidad con el Cliente</h2>
                            <p class="parrafo">Priorizamos relaciones solidas basadas en la confianza y satisfacción del cliente.</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="two-part" id="nosotros">
            <section class="two-box">
                <div class="card-preview">
                    <figure class="phto1 box">
                        <img class="img" src="./pics/fond_3.jpg" alt="2">
                    </figure>
                    <figure class="phto2 box">
                        <img class="img" src="./pics/fond_2.jpg" alt="3">
                    </figure>
                    <div class="phto3 box"></div>
                </div>
                <div class="card-descrip">
                    <div class="descrip-up">
                        <h2 class="tittle-h2">ACERCA DE MANUFACTURAS AMERICA EIRL</h2>
                        <h1 class="tittle-h1">Puedes encontrar todo tipo de telas aquí</h1>
                        <p class="parrafo">Manufacturas America es una empresa fundada en el año 1988, lider en la confección de ropa infantil en tejido de punto y plano, especialmente en algodones Pima y Organico. Tenemos una amplia gama de productos dirigidos a diferentes nichos de mercado, abarcando desde prendas básicas hasta prendas más elaboradas con mayor valor agregado.</p>
                    </div>
                    <div class="descrip-down">
                        <div class="vision my">
                            <h2 class="subtitle">Nuestra Visión</h2>
                            <ul class="info-ame">
                                <i class="fa-regular fa-circle-check"></i>
                                <p class="parrafo">Ser la empresa numero uno en el diseño y confección de ropa infantil tanto para el mercado local como extranjero, generando valor para los inversionistas, clientes y trabajadores.</p>
                            </ul>
                        </div>
                        <div class="mision my">
                            <h2 class="subtitle">Nuestra Misión</h2>
                            <ul class="info-ame">
                                <i class="fa-regular fa-circle-check"></i>
                                <p class="parrafo">Proporcionar a nuestros clientes un servicio integral y de calidad para el desarrollo y producción de sus prendas, conservando buenas practicas empresariales e incentivando la participación de todos los trabajadores dentro de un clima de orden, compromiso y colaboración.</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="three-part">
            <div class="counter-info">
                <h1 class="tittle-h1">Nuestro trabajo en números</h1>
                <div class="box-counter">
                    <i class="fa-solid fa-plus"></i>
                    <h2 class="counter" data-target="3000">0</h2>
                    <h3 class="parrafito">Proyectos Completados</h3>
                </div>
                <div class="box-counter">
                    <i class="fa-solid fa-plus"></i>
                    <h2 class="counter" data-target="80">0</h2>
                    <h3 class="parrafito">Paises Exportados</h3>
                </div>
                <div class="box-counter">
                    <i class="fa-solid fa-plus"></i>
                    <h2 class="counter" data-target="2500">0</h2>
                    <h3 class="parrafito">Clientes Satisfechos</h3>
                </div>
            </div>
        </section>
        <section class="four-part" id="procesos">
            <div class="service-info">
                <h2 class="tittle-h2">NUESTROS SERVICIOS</h2>
                <h1 class="tittle-h1">El textil es lo que hacemos</h1>
                <p class="parrafito">Nuestros procesos de producción esta orientado a ofrecer un servicio integral para la elaboración de muestras en coordinación directa con nuestros clientes, aportando nuestra experiencia y aplicando las nuevas tendencias del mercado.</p>
            </div>
            <div class="box-areas">
                <div class="container">
                    <figure class="img-area">
                        <img src="./pics/iconos/bordado.png" alt="bordado">
                    </figure>
                    <h2 class="subtitle">Bordados</h2>
                    <div class="descrip-area">
                        <p class="parrafo">Ofrecemos el diseño, desarrollo y producción de diferentes tipos de bordados con máquinas de alta precisión orientados al mercado infantil</p>
                        <a href="./Screens/process.php#bordado">LEER MÁS <i class="fa-regular fa-circle-right"></i></a>
                    </div>
                </div>
                <div class="container">
                    <figure class="img-area">
                        <img src="./pics/iconos/corte.png" alt="corte">
                    </figure>
                    <h2 class="subtitle">Corte</h2>
                    <div class="descrip-area">
                        <p class="parrafo">La sala de corte cuenta con personal altamente calificado; con equipos y maquinarias que priorizan la seguridad de nuestros colaboradores</p>
                        <a href="./Screens/process.php#corte">LEER MÁS <i class="fa-regular fa-circle-right"></i></a>
                    </div>
                </div>
                <div class="container">
                    <figure class="img-area">
                        <img src="./pics/iconos/costura.png" alt="costura">
                    </figure>
                    <h2 class="subtitle">Costura</h2>
                    <div class="descrip-area">
                        <p class="parrafo">Nuestro proceso de costura se realiza bajo un sistema modular, permitiéndonos atender pedidos variados con rapidez y flexibilidad.</p>
                        <a href="./Screens/process.php#costura">LEER MÁS <i class="fa-regular fa-circle-right"></i></a>
                    </div>
                </div>
                <div class="container">
                    <figure class="img-area">
                        <img src="./pics/iconos/acabados.png" alt="acabados">
                    </figure>
                    <h2 class="subtitle">Acabados</h2>
                    <div class="descrip-area">
                        <p class="parrafo">A fin de asegurar un producto de alta calidad realizamos un riguroso control final de cada prenda</p>
                        <a href="./Screens/process.php#acabado">LEER MÁS <i class="fa-regular fa-circle-right"></i></a>
                    </div>
                </div>
                <div class="container">
                    <figure class="img-area">
                        <img src="./pics/iconos/despacho.png" alt="despacho">
                    </figure>
                    <h2 class="subtitle">Despacho</h2>
                    <div class="descrip-area">
                        <p class="parrafo">Nos encargamos de organizar y gestionar la distribución de los productos textiles a clientes y puntos de venta</p>
                        <a href="./Screens/process.php#despacho">LEER MÁS <i class="fa-regular fa-circle-right"></i></a>
                    </div>
                </div>
                <div class="container">
                    <figure class="img-area">
                        <img src="./pics/iconos/desarrollo.png" alt="desarrollo">
                    </figure>
                    <h2 class="subtitle">Desarrollo</h2>
                    <div class="descrip-area">
                        <p class="parrafo">Nos enfocamos en la creación y mejora de los productos textiles, el diseño de nuevos tejidos, patrones y acabados</p>
                        <a href="./Screens/process.php#desarrollo">LEER MÁS <i class="fa-regular fa-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="five-part">
            <div class="container-clients"><!--slider-->
                <div class="slide-track"><!--slide-track-->
                    <figure class="card-client"><!--slide-->
                        <img src="./pics/marcas/baby_cottons.png" alt="baby_cottons">
                    </figure>
                    <figure class="card-client">
                        <img src="./pics/marcas/kissy.png" alt="kissy">
                    </figure>
                    <figure class="card-client">
                        <img src="./pics/marcas/little_en.png" alt="little_en">
                    </figure>
                    <figure class="card-client">
                        <img src="./pics/marcas/lake.png" alt="lake">
                    </figure>
                    <figure class="card-client">
                        <img src="./pics/marcas/livly.png" alt="livly">
                    </figure>
                    <figure class="card-client">
                        <img src="./pics/marcas/baby_nomie.png" alt="baby_nomie">
                    </figure>
                    <figure class="card-client">
                        <img src="./pics/marcas/oh_pima.png" alt="pima">
                    </figure>
                    <figure class="card-client">
                        <img src="./pics/marcas/trousseau.png" alt="trousseau">
                    </figure>
                    <figure class="card-client">
                        <img src="./pics/marcas/caprilina-letter.png" alt="caprilina">
                    </figure>
                </div>
            </div>
        </section>
        <section class="six-part">
            <article class="container-caract">
                <div class="caract-box">
                    <h2 class="tittle-h2">¿PORQUÉ MANUFACTURAS AMERICA EIRL?</h2>
                    <h1 class="tittle-h1">Precio más bajo garantizado, calidad nunca comprometida</h1>
                    <p class="parrafo">La elección perfecta para tus necesidades textiles. Con décadas de experiencia en la industria, nos destacamos por nuestra pasión por la calidad y la innovación. Desde la selección cuidadosa de materiales hasta nuestro riguroso control de calidad, cada paso del proceso de producción está diseñado para garantizar productos superiores. Además, nuestro compromiso inquebrantable con la satisfacción del cliente nos impulsa a superar las expectativas en cada interacción. ¡Únete a nosotros y experimenta la excelencia en cada prenda!</p>
                </div>
                <div class="caract-porcent">
                    <div class="porcent">
                        <li>95%</li>
                        <h2 class="tittle-h2">Experiencia de Fabrica</h2>
                    </div>
                    <div class="porcent">
                        <li>97%</li>
                        <h2 class="tittle-h2">Material Textil</h2>
                    </div>
                    <div class="porcent">
                        <li>96%</li>
                        <h2 class="tittle-h2">Habilidad Textil</h2>
                    </div>
                    <div class="porcent">
                        <li>93%</li>
                        <h2 class="tittle-h2">Equipo y Maquinaria</h2>
                    </div>
                </div>
            </article>
            <article class="container-coments">
                <div class="box-coments">
                    <figure class="icon-coments">
                        <img src="./pics/iconos/comilla.png" alt="comillas">
                    </figure>
                    <p class="parrafito">"¡Hola a todos! En Manufacturas America EIRL, nos dedicamos a brindarte la mejor calidad en cada prenda. ¿Listo para experimentar la excelencia? ¡Estamos aquí para ti!"</p>
                    <div class="card-person">
                        <figure class="figure-person">
                            <img src="./pics/pastore.jpg" alt="admi">
                        </figure>
                        <h2 class="tittle-h1">Pastor Giron</h2>
                        <h3 class="parrafo">Entrepreneur</h3>
                    </div>
                </div>
            </article>
        </section>
        <section class="seven-part">
            <article class="container-contc">
                <h1 class="tittle-h1">Consulta con nosotros el material adecuado para tu proyecto.</h1>
                <p class="parrafito">¡Hablemos! En Manufacturas América EIRL, estamos aquí para responder cualquier pregunta que tengas. Completa el formulario o contáctanos directamente. Esperamos saber de ti pronto.</p>
                <button type="button" class="initial-button" onclick="location.href='./Screens/contacto.php'">CONTACTENOS</button>
            </article>
        </section>
        <section class="eight-part">
            <article class="container-tela">
                <div class="box-descrip-tela">
                    <h2 class="tittle-h2">NUESTROS PROYECTOS</h2>
                    <h1 class="tittle-h1">Algunas telas elaboradas</h1>
                    <p class="parrafo">En Manufacturas América EIRL, nuestros proyectos están impulsados por la calidad. Utilizamos solo los mejores materiales para garantizar resultados excepcionales. Explora nuestra selección y descubre el estándar de excelencia en cada tejido.</p>
                </div>
                <div class="box-type-tela"> <!--container-->
                    <div class="card-tela"> <!--card__container-->
                        <article class="card__article"> <!--card__article-->
                            <figure class="box-tela-img">
                                <img src="./pics/telas/t1.jpg" alt="t1">
                            </figure>
                            <div class="descrip-tela"> <!--card__data-->
                                <h2 class="sub-h2">Tela de algodón</h2>
                                <p class="parrafo">Suave y transpirable. Ideal para ropa casual y cómoda.</p>
                            </div>
                        </article>
                    </div>
                    <div class="card-tela">
                        <article class="card__article"> <!--card__article-->
                            <figure class="box-tela-img">
                                <img src="./pics/telas/t2.jpg" alt="t1">
                            </figure>
                            <div class="descrip-tela"> <!--card__data-->
                                <h2 class="sub-h2">Tela pima</h2>
                                <p class="parrafo">Elegante y ligera. Ideal para prendas fluidas y femeninas.</p>
                            </div>
                        </article>
                    </div>
                    <div class="card-tela">
                        <article class="card__article"> <!--card__article-->
                            <figure class="box-tela-img">
                                <img src="./pics/telas/t3.jpg" alt="t1">
                            </figure>
                            <div class="descrip-tela"> <!--card__data-->
                                <h2 class="sub-h2">Tela velour</h2>
                                <p class="parrafo">Natural y fresco. Ideal para ropa de verano.</p>
                            </div>
                        </article>
                    </div>
                    <div class="card-tela">
                        <article class="card__article"> <!--card__article-->
                            <figure class="box-tela-img">
                                <img src="./pics/telas/t4.jpg" alt="t1">
                            </figure>
                            <div class="descrip-tela"> <!--card__data-->
                                <h2 class="sub-h2">Tela jacquard</h2>
                                <p class="parrafo">Cálida y duradera. Perfecta para prendas de invierno.</p>
                            </div>
                        </article>
                    </div>
                    <div class="card-tela">
                        <article class="card__article"> <!--card__article-->
                            <figure class="box-tela-img">
                                <img src="./pics/telas/t5.jpg" alt="t1">
                            </figure>
                            <div class="descrip-tela"> <!--card__data-->
                                <h2 class="sub-h2">Tela french terry</h2>
                                <p class="parrafo">Clásica tela resistente para prendas informales.</p>
                            </div>
                        </article>
                    </div>
                    <div class="card-tela"> 
                        <article class="card__article"> <!--card__article-->
                            <figure class="box-tela-img">
                                <img src="./pics/telas/t6.jpg" alt="t1">
                            </figure>
                            <div class="descrip-tela"> <!--card__data-->
                                <h2 class="sub-h2">Tela rib</h2>
                                <p class="parrafo">Elastizada y texturizada. Ideal para detalles y ajuste.</p>
                            </div>
                        </article>
                    </div>
                    
                </div>
            </article>
        </section>
    </main>
    <footer class="footer">
        <article class="container-footer">
            <div class="info-left f1">
                <figure class="card-logo">
                    <img src="./pics/logotipo-reel.png" alt="logotipo">
                </figure>
                <p class="parrafo">Manufacturas América EIRL - Tu socio confiable en moda de calidad. Descubre nuestra pasión por la excelencia en cada prenda.</p>
                <span><a class="job" href="./Screens/job.php">Trabaja con nosotros</a></span>
            </div>
            <div class="info-right f1">
                <div class="box-enlaces">
                    <h2>Enlaces rápidos</h2>
                    <ul class="enlaces">
                        <li><a href="#"><i class="fa-regular fa-circle-right"></i>Inicio</a></li>
                        <li><a href="../Screens/nosotros.php"><i class="fa-regular fa-circle-right"></i>Nosotros</a></li>
                        <li><a href="../Screens/tienda.php"><i class="fa-regular fa-circle-right"></i>Tienda</a></li>
                        <li><a href="../Screens/contacto.php"><i class="fa-regular fa-circle-right"></i>Contáctenos</a></li>
                    </ul>
                </div>
                <div class="box-enlaces">
                    <h2>Información</h2>
                    <ul class="enlaces">
                        <li><i class="fa-solid fa-phone"></i>+51 923 232 414</li>
                        <li><i class="fa-regular fa-envelope"></i>nenes@manufacturasamerica.com</li>
                        <li><i class="fa-solid fa-location-arrow"></i>Av. Los Castillos 504, Lima 15023</li>
                    </ul>
                </div>
            </div>
        </article>
        <div class="master">
            <li class="parrafito">Copyright 2024 © All Right Reserved Design by Eustass</li>
        </div>
    </footer>
    <script src="./script.js"></script>
</body>
</html>