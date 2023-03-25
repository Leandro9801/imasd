<?php
foreach ($servicios as $servicio) {
    //echo "ID: " . $servicio['id'] . "<br>";
    ?>
    <div class="diseno">

        <div class="texticon">
            <a target="_blank" href="#">
                <?php
                    echo $servicio['nombre'];
                ?>
            </a>
        </div>
    </div>
    <?php
}
?>