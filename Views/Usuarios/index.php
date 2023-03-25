<?php
foreach ($usuarios as $usuarios) {
    //echo "ID: " . $servicio['id'] . "<br>";
?>
    <!-- <div class="row"> -->

    <div class="usercard2">
        <div class="member">

            <h4>
                <?php
                echo $usuarios['nombre'] . "<br>";
                ?>
            </h4>
            <span>
                <?php
                    echo $usuarios['cargo'];
                ?>
            </span>
        </div>
    </div>
    <!-- </div> -->
<?php
}
?>