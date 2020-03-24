<?php

include 'header.php';

// Set Page Properties

function setAlert() {
    global $alertStatus;
    $alertStatus = "RED";
}

setAlert();

?>

    <section>
        <header>
            <h1 class="page-title">
                <span class="sub-title">Global Functions</span>
            </h1>
        </header>
    </section>

    <section>
        <p>Alert status = <?php echo $alertStatus; ?></p>
    </section>
