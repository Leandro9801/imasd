<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/Assets/css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="styleheader.css">

    <link rel="stylesheet" href="stylefooter.css">
    <link rel="icon website" href="../Public/Assets/img/headerimg/imasd.svg">k
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>IMASDE</title>
</head>

<body>
    <?php
    include_once 'header.php';
    ?>
    <div class="background" name="inicio">
        <div class="bgcontainer">
            <div class="textbg">
                <h1>INNOVACIÓN <br> APLICADA</h1>
                <h3>Desarrollo de Software y Consultoría <br> Especializada</h3>
            </div> <br>
            <h3>Nuestros Servicios</h3>
            <br>
            <div class="boxservices">
                <!-- <div class="box">

                    <div class="texticon">
                        <p> -->
                <?php
                require_once('../Controllers/ServiciosController.php');

                $serviciosController = new ServiciosController();
                $serviciosController->index();
                ?>
                <!-- </p>
                    </div>
                </div>
            </div> -->
            </div>

        </div>
        <div class="ancho">
            <div class="aboutus ancho">
                <div class="textabout">
                    <h1>¿Quiénes Somos?</h1>
                    <p>Somos una empresa creada con el objetivo de impulsar a las organizaciones a través de la digitalización, a alcanzar sus objetivos estratégicos y extender el alcance de sus servicios y productos.
                        <br><br> ​En la actualidad con la Industria 4.0 en auge, todos estamos inmersos en las mismas posibilidades de crecimiento gracias a la tecnología, es necesario considerar automatizar procesos, analizar toda la información que produce nuestra organización y sacarle el máximo provecho para la toma de desiciones.
                        <br><br>

                        En I+D somos especialistas en Desarrollo de Software y Consultoría Especializada para base de datos e inteligencia de negocios, por lo que podemos ofrecer servicios que apoyen su transformación hacia la digitalización.
                    </p>
                </div>
                <div class="imgabout">
                    <img src="../Public/Assets/img/indeximg/aboutimg.jpg" alt="aboutimg">
                </div>
            </div>

            <hr>
            <a name="portafolios"></a>
            <section class="portfolio">
                <div class="container">

                    <div class="section-title">
                        <h2>Casos de éxito</h2>
                        <h1>Conoce nuestros casos de éxito</h1> <br><br>
                    </div>
                    <div class="imagenesexito">
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=chapur.imasd.com.chapurandroid&hl=es_MX&gl=US&pli=1"><img src="../Public/Assets/img/indeximg/chapur.png" alt="empresa"></a>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.meditoc.callCenter.comercial&hl=es_MX&pli=1"><img src="../Public/Assets/img/indeximg/meditoc.jpeg" alt="empresa"></a>
                        <a target="_blank" href="https://mx.linkedin.com/company/cda-automotriz"><img src="../Public/Assets/img/indeximg/empresa1.jpeg" alt="empresa"></a>
                        <a target="_blank" href="http://crecerengrande.com/"><img src="../Public/Assets/img/indeximg/empresa2.jpeg" alt="empresa"></a>
                        <a target="_blank" href="https://www.inmobiliariadomus.com/"><img src="../Public/Assets/img/indeximg/empresa3.jpeg" alt="empresa"></a>
                        <a target="_blank" href="https://www.yucatan.gob.mx"><img src="../Public/Assets/img/indeximg/empresa6.jpeg" alt="empresa"></a>
                        <a target="_blank" href="https://ayuda.finbe.com.mx/hc/es-mx/"><img src="../Public/Assets/img/indeximg/empresa4.jpeg" alt="empresa"></a>
                        <a target="_blank" href="https://www.megamedia.com.mx/"><img src="../Public/Assets/img/indeximg/empresa5.jpeg" alt="empresa"></a>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=mx.com.praxis.bepensa&gl=US"><img src="../Public/Assets/img/indeximg/bepensa.png" alt="empresa"></a>
                        <br><br>
                    </div>

                </div>
            </section>

            <hr>


            <a name="equipo"></a>
            <section class="team">
                <div class="container">
                    <div class="section-title">
                        <h2>Equipo</h2>
                        <h1>Conoce a nuestro equipo</h1>
                    </div>
                    <br>

                    <div class="row2">

                        <?php
                        require_once('../Controllers/UsuariosController.php');

                        $usuariosController = new UsuariosController();
                        $usuariosController->index();
                        ?>

                    </div>
                </div>
            </section>
            <hr>

            <a name="contactanos"></a>
            <section class="contact">
                <div class="container">

                    <div class="section-title">
                        <h2>Contacto</h2>
                        <h1>Contactanos</h1>
                    </div>

                    <div class="row">
                        <div class="location">
                            <div class="info">
                                <div class="address">
                                </div>

                                <div class="email">
                                    <h4>Correo:</h4>
                                    <p>info@example.com</p>
                                </div>

                                <div class="phone">
                                    <h4>Telefono:</h4>
                                    <p>+1 5589 55488 55s</p>
                                </div>

                            </div>

                        </div>

                        <div class="forminfo">
                            <h1>Cotiza con nosotros</h1>
                            <br>

                            <form action="../Controllers/enviarcorreoController.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="subject" id="subject" placeholder="Telefono" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Mensaje, especifique el tamaño de la empresa (Micro, pequeña, mediana o grande)." required></textarea>
                                </div>
                                <div class="text-center"><button type="submit">Enviar</button></div>
                            </form>
                        </div>
                        <h4>Nos ubicamos en:</h4>
                    </div>
                    <br>
                    <div class="row2"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.960780507713!2d-89.61937552545936!3d20.99420918896573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56715267d70921%3A0xbe0574d8d524f2c3!2sI%2BD%20Innovaci%C3%B3n%20Aplicada!5e0!3m2!1ses!2smx!4v1679773084464!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

                </div>
            </section>
        </div>
        <?php include_once 'footer.php'; ?>

</body>

</html>