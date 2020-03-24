<?php

include 'include/header.php';

// Set Page Properties
// -------------------
//

$alertStatus = "Green";

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
                <span style="float:right"><a href="workshop-index.php">< Back</a></span>
            </h1>
        </header>
    </section>

    <p>Below is an example of the $global variable working from inside the function</p>

    <pre>
    $alertStatus = "Green";

    function setAlert() {
        global $alertStatus;
        $alertStatus = "RED";
    }

    setAlert();
    </pre>

    <section>
        <p>This returns:
            <pre>Alert status = echo $alertStatus</pre>
        </p>
        <p>Alert status = <?php echo $alertStatus; ?></p>
    </section>