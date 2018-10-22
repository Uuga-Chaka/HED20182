<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoy es diseño 2018-2</title>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Hoy es Diseño Evento 2018 + Creatividad + Diseño + Innovación</title>
    <!-- Theme color browser -->
    <meta name="theme-color" content="#000111" />
    <link rel="icon" href="https://www.hoyesdiseno.com/store/wp-content/uploads/2018/02/icon-hed.png" />
    <meta name="keywords" content="hoy es diseño, evento hoy es diseño, registro hoy es diseño, evento diseño, universidad icesi, diseño de medios interactivos, diseño industrial, cali, colombia" />
    <meta name="description" content="La articulación de la creatividad dentro de las disciplinas del sector creativo conduce a generar procesos y resultados innovadores que transforman y enriquecen los productos, servicios y experiencias que vivimos diariamente.">
    <!-- og tags Facebook -->
    <meta property="og:description" content="La articulación de la creatividad dentro de las disciplinas del sector creativo conduce a generar procesos y resultados innovadores que transforman y enriquecen los productos, servicios y experiencias que vivimos diariamente.">
    <meta property="og:title" content="Hoy es Diseño Evento 2018 + Creatividad + Diseño + Innovación">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hoyesdiseno.com/evento">
    <meta property="og:image" content="https://hoyesdiseno.com/evento/assets/images/backgrounds/cinemateca.jpg">
    <meta property="og:site_name" content="hoyesdiseno.com/evento">
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hoy es Diseño Evento 2018 + Creatividad + Diseño + Innovación">
    <meta name="twitter:description" content="La articulación de la creatividad dentro de las disciplinas del sector creativo conduce a generar procesos y resultados innovadores que transforman y enriquecen los productos, servicios y experiencias que vivimos diariamente.">
    <meta name="twitter:image:src" content="https://hoyesdiseno.com/evento/assets/images/backgrounds/cinemateca.jpg">
    <meta name="twitter:domain" content="hoyesdiseno.com/evento">
    <!-- SEO -->
    <link rel="canonical" href="https://hoyesdiseno.com/evento">
    <!-- hreflang -->
    <link rel="alternate" href="https://hoyesdiseno.com/evento" hreflang="es">
    <!--Stilos-->
    <link rel="stylesheet" href="stylee.css">
</head>

<body>
    <div id="app">
        <div id="container">
            <div id="nav">
                <div class="size">
                    <img src="assets/img/logo-hedp-black.svg" alt="">
                    <div class="links">
                        <ul>
                            <li><a href="#patro">patrocinadores</a></li>
                            <li><a href="#ponentes">ponentes</a></li>
                            <li><a href="#partner">media partners</a></li>
                            <li><a href="#map">lugar</a></li>
                            <li><a href="#suscribe">contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <header>
                <img class="animated current" src="assets/img/creacion_banner.png" alt="">
                <img class="animated" src="assets/img/diversidad.png" alt="">
                <img class="animated" src="assets/img/Cambio.png" alt="">
                <div class="content">
                    <div class="words">
                        <h1 class="animate current">creación</h1>
                        <h1 class="animate">cambio</h1>
                        <h1 class="animate">diversidad</h1>
                    </div>
                    <div id="fecha">
                        <div class="up">
                            <p>Universidad Icesi</p>
                            <span>Jueves 8 // Viernes 9</span>
                        </div>
                        <div class="down">
                            <p>noviembre//2018</p>
                        </div>
                    </div>
                </div>
            </header>
            <div id="patro">
                <h2>gracias a nuestros</h2>
                <h1>patrocinadores</h1>
                <Images v-bind:patrocinadores="patrocinio"></Images>
            </div>
            <div id="ponentes">
                <h1>ponentes</h1>
                <div class="contents">
                    <Ponentes v-bind:ponentes="ponente" v-bind:selected="currentPonente"></Ponentes>
                </div>
            </div>
            <div id="partner">
                <div class="info">
                    <h1>media partners</h1>
                </div>
                <div id="media-partners">
                    <Partner v-bind:elementos="partners" :cantidad="shownElements"></Partner>

                </div>
            </div>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.033887981898!2d-76.53282148524222!3d3.3417917975673026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a1eb8d09a3c1%3A0x766b9b441dfa8bbe!2sUniversidad+Icesi!5e0!3m2!1ses!2sco!4v1537401147788"
                    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div id="suscribe">
                <?php include('form-mangement.php') ?>
                <div id="form-content">
                    <h1>contacto</h1>
                    <form action="<?= $SERVER['PHP_SELF']; ?>" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="nombre@correo.com" value="<?= $email ?>"
                            required>
                        <span class="error">
                            <?= $email_error  ?></span>
                        <label for="name">Nombre + Apellido</label>
                        <input type="text" name="name" id="name" placeholder="Nombre apellido" value="<?= $name ?>"
                            required>
                        <span class="error">
                            <?= $name_error  ?></span>
                        <label for="tel">Celular</label>
                        <input type="tel" id="tel" name="tel" placeholder="0123456789" value="<?= $tel ?>" required>
                        <span class="error">
                            <?= $tel_error  ?></span>
                        <label for="message">Mensaje</label>
                        <textarea name="message" id="message" name="message" placeholder="Mensaje..." value="<?= $message ?>"
                            onkeyup="textAreaAdjust(this)" required></textarea>
                        <span class="error">
                            <?= $msj_error  ?></span>
                        <div id="validate">
                            <p>Al enviar el mensaje estás aceptando la <a href="#">política de privacidad</a> y <a href="#">tratamiento
                                    de
                                    datos personales</a> de la Universidad Icesi.</p>
                        </div>
                        <div class="btn">
                            <input type="submit" value=" Suscribirme">
                        </div>
                    </form>
                </div>
            </div>
            <footer>
                <div class="content">

                    <div class="hed">
                        <img src="assets/img/logo-hedp-black.svg" alt="">
                        <p>2018 © Hoy Es Diseño</p>
                    </div>
                    <div class="links">
                        <ul>
                            <li><a href="#">MEDIA PARTNERS</a></li>
                            <li><a href="#">PONENTES</a></li>
                            <li><a href="#">PRENSA</a></li>
                            <li><a href="#">LUGAR</a></li>
                            <li><a href="#">CONTACTO</a></li>
                            <li><a href="#">AGENDA</a></li>
                        </ul>
                    </div>
                    <div class="redes">
                        <a href="https://www.facebook.com/hoyesdiseno/"><img src="assets/img/logo-facebook.svg" alt=""></a>
                        <a href="https://www.instagram.com/_hoyesdiseno/"><img src="assets/img/logo-instagram.svg" alt=""></a>
                        <a href="https://twitter.com/hoyesdiseno"><img src="assets/img/logo-twitter.svg" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCd6a78lCXv3gdgnJXsARR8g"><img src="assets/img/logo-youtube.svg"
                                alt=""></a>
                    </div>
                </div>
            </footer>
        </div>

        <div id="tiendita">
            <a href="https://www.hoyesdiseno.com/tienda/">
                <img src="assets/img/logo-hedtienda-black.svg" alt="" srcset="">
            </a>
        </div>

        <div id="infosita">
            <Modal v-if="seleccionado" v-bind:datos="seleccionado"></Modal>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <script src="accions.js"></script>
    <script src="datos.js"></script>
    <script src="appp.js"></script>
</body>

</html>