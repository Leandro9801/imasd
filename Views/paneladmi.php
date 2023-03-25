<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS STYLES -->
    <link rel="stylesheet" href="stylepanel.css">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Panel Administrativo</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <section class="home">
        <div class="containerwhite">
            <div class="izq">
                <h1>Calendario de <br> Eventos</h1> <br>
                <div class="columna-centro">
                    <div class="superior">
                        <div id="calendario">
                            <iframe src="https://calendar.google.com/calendar/embed?src=70250f47585bb88d7dfe4c5be272775745abf619f7169d2e8af7a3c5d6bfa90a%40group.calendar.google.com&ctz=America%2FMexico_City" style="border: 0" width="100%" height="400" frameborder="0" scrolling="si"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="der">
                <img src="https://via.placeholder.com/500x500.png" alt="Imagen">
                <br>
                <b>Información personal</b>
                <br>
                <div class="texto">
                    <p>Departamento:</p>
                    <p>Área:</p>
                    <p>Puesto:</p>
                    <p>Correo:</p>
                    <p>ID:</p>
                    <p>Número personal:</p>
                    <p>Número corporativo:</p>
                </div>
            </div> -->
            <!-- <div class="text">Panel Administrativo</div>
            <div class="imagehome">
                <img src="../img/bannerpanel.jpg" alt="homeimage">
            </div> -->
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>