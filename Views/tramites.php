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
    <title>Tramites</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <section class="home">
        <div class="containerwhiteborder2">
            <h1>Formatos para solicitar Tramites</h1> <br><br>
            <div class="containerflex">
                <a href="fprestamos.php">
                    <div class="containerdata">
                        <div class="containertramites">
                            <img src="" alt="img">
                        </div>
                        <p>Formato Prestamos</p>
                    </div>
                </a>
            </div>
            <div class="containerflex">
                <a href="fsolicitudpersonal.php">
                    <div class="containerdata">
                        <div class="containertramites">
                            <img src="" alt="img">
                        </div>
                        <p>Formato de solicitud de personal
                        </p>
                    </div>
                </a>
            </div>
            <div class="containerflex">
                <a href="fhorasextra.php">
                    <div class="containerdata">
                        <div class="containertramites">
                            <img src="" alt="img">
                        </div>
                        <p>Formato de horas extra
                        </p>
                    </div>
                </a>
            </div>
            <div class="containerflex">
                <a href="fadminpersonal.php">
                    <div class="containerdata">
                        <div class="containertramites">
                            <img src="" alt="img">
                        </div>
                        <p>Formato múltiple administrativo personal
                        </p>
                    </div>
                </a>
            </div>
            <div class="containerflex">
                <a href="fmultiple.php">
                    <div class="containerdata">
                        <div class="containertramites">
                            <img src="" alt="img">
                        </div>
                        <p>Formato múltiple
                        </p>
                    </div>
                </a>
            </div>
            <div class="containerflex">
                <a href="fcontratacion.php">
                    <div class="containerdata">
                        <div class="containertramites">
                            <img src="" alt="img">
                        </div>
                        <p>Formato de contratación
                        </p>
                    </div>
                </a>
            </div>

        </div>
    </section>
</body>
<script src="script.js"></script>

</html>