<?php
foreach ($colaboradores as $colaboradores) {
    //echo "ID: " . $servicio['id'] . "<br>";
?>
    <!-- <div class="row"> -->

    <div class="usercard">
        <div class="member">

            <h4>
                <?php
                echo $colaboradores['nombre'] . "<br>";
                ?>
            </h4>
            <span>
                <?php
                    echo $colaboradores['cargo']."<br>";
                ?>
            </span>
            <span>
                <?php
                    echo $colaboradores['correo']."<br>";
                ?>
            </span>
        </div>
    </div>
    <!-- </div> -->
<?php
}
?>