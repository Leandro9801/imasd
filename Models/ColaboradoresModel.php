<?php
require_once('../Config/db_config.php');

class ColaboradoresModel {

    public function obtenerColaboradores() {
        global $conn;

        $query = "SELECT cargo, nombre, correo FROM colaboradores";
        $result = mysqli_query($conn, $query);

        $usuarios = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $usuarios[] = $row;
        }

        return $usuarios;
    }
    public function busquedacolaboradores()
    {
        global $conn;
        
        // Conectarse a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "imasd");

        // Obtener los términos de búsqueda del formulario
        $departamento = $_POST['departamento'];
        $cargo = $_POST['cargo'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono_personal = $_POST['telefono_personal'];
        $telefono_coorp = $_POST['telefono_coorp'];

        // Construir la consulta SQL con los términos de búsqueda
        $sql = "SELECT * FROM colaboradores WHERE 1=1";

        if (!empty($departamento)) {
            $sql .= " AND departamento LIKE '%$departamento%'";
        }

        if (!empty($cargo)) {
            $sql .= " AND cargo LIKE '%$cargo%'";
        }

        if (!empty($nombre)) {
            $sql .= " AND nombre LIKE '%$nombre%'";
        }

        if (!empty($correo)) {
            $sql .= " AND correo LIKE '%$correo%'";
        }

        if (!empty($telefono_personal)) {
            $sql .= " AND telefono_personal LIKE '%$telefono_personal%'";
        }

        if (!empty($telefono_coorp)) {
            $sql .= " AND telefono_coorp LIKE '%$telefono_coorp%'";
        }

        // Ejecutar la consulta SQL
        $resultado = mysqli_query($conexion, $sql);

        // Mostrar los resultados en una tabla HTML
        echo"<style>
        table {
          border-collapse: collapse;
          width: 100%;
          margin: 20px 0;
          font-size: 0.9em;
          font-family: sans-serif;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        th {
          background-color: #4f6c9b;
          color: white;
          text-align: left;
          padding: 12px;
          text-transform: uppercase;
        }
        td {
          border-bottom: 1px solid #ddd;
          padding: 12px;
          text-align: left;
        }
        tr:hover {
          background-color: #f5f5f5;
        }
      </style>";
        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Departamento</th>
        <th>Cargo</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Teléfono personal</th>
        <th>Teléfono corporativo</th>
        </tr>";

        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['departamento'] . "</td>";
            echo "<td>" . $fila['cargo'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['correo'] . "</td>";
            echo "<td>" . $fila['telefono_personal'] . "</td>";
            echo "<td>" . $fila['telefono_coorp'] . "</td>";
            echo "</tr>";
        }
        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);


    }
}