<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabaja con nosotros</title>
    <link rel="icon" type="image/png" href="../pics/logo-man.png">
    <link rel="stylesheet" href="../styles/job.css">
    <script src="https://kit.fontawesome.com/326d6d93eb.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="box-right">
            <nav class="nav-right">
                <figure class="card-logo">
                    <img class="img" src="../pics/logotipo.png" alt="logo">
                </figure>
                <ul class="menu-horizontal">
                    <li><a class="primary" href="../index.php#">Inicio</a></li>
                    <li><a class="primary" href="./nosotros.php">Nosotros</a></li>
                    <li>
                        <a class="secondary" href="../index.php#procesos">Procesos<i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu-vertical">
                            <li><a href="./process.php#desarrollo">Desarrollo</a></li>
                            <li><a href="./process.php#bordado">Bordado</a></li>
                            <li><a href="./process.php#corte">Corte</a></li>
                            <li><a href="./process.php#costura">Costura</a></li>
                            <li><a href="./process.php#acabados">Acabados</a></li>
                            <li><a href="./process.php#despacho">Despacho</a></li>
                        </ul>
                    </li>
                    <li><a class="primary" href="./tienda.php">Tienda</a></li>
                    <li><a class="primary" href="./contacto.php">Contáctenos</a></li>
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
                            <li><a href="./perfil.php">Ver perfil</a></li>
                            <li><a href="../php/logout.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>Carrito</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <section class="sec-job j1"></section>
        <section class="sec-job j2">
            <div class="container-info__job">
                <h1 class="tittle-h1">TRABAJA CON NOSOTROS</h1>
                <div class="box-info-job">
                    <figure class="card-person__photo">
                        <img src="../pics/woman.png" alt="woman">
                    </figure>
                    <div class="card-person__info">
                        <h2>¡Únete al equipo textil!</h2>
                        <p class="parr">En Manufacturas America, nuestros colaboradores nos permiten lograr un servicios experto y amable, necesitamos colaboradores con actitud y vocación de servicio.</p>
                        <ul class="info-beneficios">
                            <h4>Beneficios:</h4>
                            <li>Experiencia en el uso de maquinaria textil</li>
                            <li>Uniformes gratuitos</li>
                            <li>Beneficio-3</li>
                            <li>Beneficio-4</li>
                            <li>Beneficio-5</li>
                            <li>Beneficio-6</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-job j3">
            <h1>Envía tus datos</h1>
            <p class="parrafito">¡Te contactaremos muy pronto!</p>
        </section>
        <section class="sec-job j4">
             <form action="/" class="formulario" id="lookup" onsubmit="process(event)">
                        <div class="user-details">
                            <div class="input-box">
                                <label for="name" class="details">Nombre:</label>
                                <input type="text" id="name" name="nombre" placeholder="Ingresa tu nombre" required>
                            </div>
                            <div class="input-box">
                                <label for="lastname" class="details">Apellido:</label>
                                <input type="text" id="lastname" name="apellido" placeholder="Ingresa tu apellido" required>
                            </div>
                            <div class="input-box">
                                <label for="email" class="details">Email:</label>
                                <input type="email" id="email" name="correo" placeholder="Ingresa tu correo" required>
                            </div>
                            <div class="input-box-file">
                                <input type="file" id="file-3" name="file-3" class="inputfile inputfile-3" data-multiple-caption="{count} archivos seleccionados" multiple required>
                                <label for="file-3" class="details">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                    <span class="iborrainputfile">Enviar CV</span>
                                </label>
                            </div>
                            <div class="input-box-one">
                                <label for="mensaje" class="details">Mensaje:</label>
                                <textarea cols="10" name="mensaje" id="mensaje" placeholder="Escribe algo aqui..." required></textarea>
                            </div>
                        </div>
                        <div class="box-button-form">
                            <button type="submit" class="initial-button" id="btn">Enviar</button>
                        </div>
                    </form>
        </section>
    </main>
    <footer class="footer">
        <article class="container-footer">
            <div class="info-left f1">
                <figure class="card-logo">
                    <img src="../pics/logotipo-reel.png" alt="logotipo">
                </figure>
                <p class="parrafo">Manufacturas América EIRL - Tu socio confiable en moda de calidad. Descubre nuestra pasión por la excelencia en cada prenda.</p>
                <span><a class="job" href="#">Trabaja con nosotros</a></span>
            </div>
            <div class="info-right f1">
                <div class="box-enlaces">
                    <h2>Enlaces rápidos</h2>
                    <ul class="enlaces">
                        <li><a href="../index.php#"><i class="fa-regular fa-circle-right"></i>Inicio</a></li>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">emailjs.init('NAvXsGPQqQBbP4iHY')</script>
</body>
</html>