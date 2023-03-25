<footer>
    <div class="social-media">
        <a href="#"><i class="bx bxl-facebook ico"></i></a>
        <a href="#"><i class="bx bxl-twitter ico"></i></a>
        <a href="#"><i class="bx bxl-whatsapp ico"></i></a>
    </div>
    <div class="terms">
        <p>Derechos reservados 2021 &copy;</p>
        <a href="#">Términos y Condiciones</a> <br>
        <?php

        // URL de la API y clave API
        $url = 'https://api.openweathermap.org/data/2.5/weather?lat=21.0134364&lon=-89.6220306&appid=08d5de7a5b0ba3f58e076bf5e8588845';

        // Hacer una solicitud GET a la API
        $response = file_get_contents($url);

        // Decodificar la respuesta JSON
        $data = json_decode($response);

        // Verificar si la solicitud fue exitosa
        if ($data->cod == 200) {

            // Acceder a la temperatura actual si está disponible
            if (isset($data->main->temp)) {
                $temperature = $data->main->temp;
                echo "La temperatura actual es: " . $temperature . " grados Kelvin.";
            } else {
                echo "La temperatura actual no está disponible en este momento.";
            }
        } else {
            echo "No se pudo obtener la temperatura actual de Nueva York.";
        }

        ?>


    </div>
</footer>