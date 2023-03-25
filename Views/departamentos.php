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
    <title>Departamentos</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <section class="home">
    <h1>Departamentos</h1> <br><br>
        <div class="containerwhiteborder">
            <div class="busqueda">
                <form action="busqueda.php" method="post">
                    <label>Departamento:</label>
                    <input type="text" name="departamento"><br><br>

                    <label>Cargo:</label>
                    <input type="text" name="cargo"><br><br>

                    <label>Nombre:</label>
                    <input type="text" name="nombre"><br><br>

                    <label>Correo:</label>
                    <input type="text" name="correo"><br><br>

                    <label>Teléfono personal:</label>
                    <input type="text" name="telefono_personal"><br><br>

                    <label>Teléfono corporativo:</label>
                    <input type="text" name="telefono_coorp"><br><br>

                    <input type="submit" value="Buscar">
                </form>
            </div>
            <div class="row">

                <?php
                require_once('../Controllers/ColaboradoresController.php');

                $usuariosController = new ColaboradoresController();
                $usuariosController->index();
                ?>

            </div>
        </div>
</body>
<script src="script.js"></script>

</html>