<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 26/03/2020
 * Time: 16:12
 */

include '../include/header.php';

// Ternary operator
$authors = ["Charles Dickes","Keith Moon","Jimmy Lowry"];
//$count = count($authors);

//$outcome = ($count > 0 ) ? "Author Total: " .$count : "No Authors";

$outcome = $count ? $count : "Count unavailable.";

// Null Coalesce php 7
//$outcome = $count ?? $anotherVaribale ?? "Count unavailable.";
echo $outcome;








?>
<section>
        <header>
            <h1 class="page-title">
                <span class="sub-title">Operators</span>
                <span style="float:right"><a href="workshop-index.php">< Back</a></span>
            </h1>
        </header>
    </section>
    <section>
        <p></p>
    </section>
    </body>
    </html>