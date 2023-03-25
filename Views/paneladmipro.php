<?php
require "../Models/conexionModel.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS STYLES -->
    <link rel="stylesheet" href="../Public/Assets/css/styles-Usuario.css">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Panel Administrativo</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <section class="home">
        <div class="contenedor">
            <div>
                <div class="colaboradores">
                    <div class="colab">
                        <p>AGREGAR COLABORADORES</p>
                        <form class="formularioagregar" action="../Controllers/AgregarUsuarioController.php" name="formulario" method="POST">
                            <label>Usuario</label> <br>
                            <input class="texto" type="text" placeholder="Nombre y apellido" id="nombre" name="nombre"> <br>
                            <label>Correo</label> <br>
                            <input class="texto" type="text" placeholder="Correo Electrónico" id="correo" name="correo"> <br>
                            <label>Contraseña</label> <br>
                            <input class="campo" type="password" id="contrasena" name="contrasena" placeholder="Debe tener al menos 6 caracteres"> <br>
                            <label>Cargo</label> <br>
                            <input class="texto" type="text" placeholder="Cargo" id="Cargo" name="cargo"> <br>
                            <label>Departamento</label> <br>
                            <input class="texto" type="text" placeholder="Departamento" id="departamento" name="departamento"> <br>
                            <label>Telefono</label> <br>
                            <input class="texto" type="text" placeholder="Telefono" id="telefono_personal" name="telefono_personal"> <br>
                            <input type="button" id="btnguardar" value="Guardar" onclick="valida_formulario()">
                        </form>
                        <br><br>
                    </div>
                    <div class="servi">
                        <p>AGREGAR SERVICIOS</p>
                        <form class="formularioagregar" action="../Controllers/AgregarServicioController.php" name="formularioS" method="POST">
                            <label>Nombre</label> <br>
                            <input class="texto" type="text" placeholder="Nombre" id="nombreS" name="nombreS"> <br>
                            <input type="button" id="btnguardarS" value="Guardar" onclick="valida_formularioS()">
                        </form>
                    </div>
                </div>
                <div class="cuadroproducto">
                    <div>
                        <table>
                            <tr>
                                <th class="tamanoid">ID</th>
                                <th class="tamanonombre">Correo</th>
                                <th class="tamanoprecio">Contraseña</th>
                                <th class="tamanoprecio">Cargo</th>
                                <th class="tamanoprecio">Departamento</th>
                                <th class="tamanoprecio">Telefono</th>
                                <th class="tamanoeliminar">Eliminar</th>
                            </tr>
                            <tr>
                                <?php
                                include "../Models/conexionModel.php";

                                $todos_datos = "SELECT * FROM colaboradores ORDER BY id ASC";

                                $resultado = mysqli_query($conectar, $todos_datos);

                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                ?>
                                    <td><?php echo $fila["id"]; ?></td>

                                    <td class="tamanoletracorreo"><?php echo $fila["correo"]; ?></td>

                                    <td class="tamanoletraprecio"><?php echo $fila["contrasena"]; ?></td>

                                    <td class="tamanoletraprecio"><?php echo $fila["cargo"]; ?></td>

                                    <td class="tamanoletraprecio"><?php echo $fila["departamento"]; ?></td>

                                    <td class="tamanoletraprecio"><?php echo $fila["telefono_personal"]; ?></td>

                                    <td class="cambio"><a href="#" onClick="validar ('../Controllers/borrarusuarioController.php?id=<?php echo $fila['id']; ?>')"><img class="del" src="../Public/Assets/img/icons/delete1.png" alt=""></a></td>

                            </tr>
                        <?php
                                }
                        ?>
                        </table>
                        <hr>
                    </div>
                </div>
            </div>


            <script>
                function validar(url) {
                    var eliminar = confirm("Realmente deseas eliminarlo");
                    if (eliminar) {
                        window.location = url;
                    }
                }

                function valida_formulario() {
                    if (document.getElementById("nombre").value.length == 0) {
                        alert("Escribe tu Nombre");
                        document.getElementById("nombre").focus();
                        return 0;
                    } else if (document.getElementById("contrasena").value.length == 0) {
                        alert("Escribe tu Contraseña");
                        document.getElementById("contrasena").focus();
                        return 0;
                    } else if (document.getElementById("correo").value.length == 0) {
                        alert("Escribe tu Correo");
                        document.getElementById("correo").focus();
                        return 0;
                    } else if (document.getElementById("contrasena").value.length < 6) {
                        alert("La contraseña debe tener al menos 6 caracteres");
                        document.getElementById("contrasena").focus();
                        return 0;
                    }
                    document.formulario.submit();
                }

                function valida_formularioS() {
                    if (document.getElementById("nombre").value.length == 0) {
                        alert("Escribe tu Nombre");
                        document.getElementById("nombre").focus();
                        return 0;
                    }
                    document.formularioS.submit();
                }
            </script>
            <script src="script.js"></script>

        </div>
</body>

</html>