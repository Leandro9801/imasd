<?php
foreach ($exitos as $exitos) {
    //echo "ID: " . $servicio['id'] . "<br>";
    ?>
    <div class="usercard">
        <div class="member">
            <p>
                <?php
                    echo $exitos['nombre']."<br>";
                    ?>
                    <a href=" <?php echo $exitos['link']."<br>"; ?> "> <?php echo $exitos['link']."<br>"; ?></a>
                <?php
                    echo $exitos['img']."<br>";
                ?>
            </p>
        </div>
    </div>
    <?php
}
?>