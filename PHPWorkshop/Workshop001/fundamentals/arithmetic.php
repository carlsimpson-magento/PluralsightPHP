<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 26/03/2020
 * Time: 16:14
 */

include '../include/header.php';

// Modulus
echo "Modulus [8 % 3] = " . 8 % 3;
echo '<br />';

// Exponentiation
echo "Exponentiation [4 ** 2] = " . 4 ** 2;
echo '<br />';
echo "Exponentiation [4 ** 8] = " . 4 ** 8;
echo '<br />';
// Incremneting - Decrementing

$alterByONe = 2;
$minusByONe = 2;

// Increment
$alterByONe ++;
$minusByONe --;

echo "Increment alterByONe ++ = " . $alterByONe;
echo '<br />';
echo "Decrement minusByONe ++ = " . $minusByONe;
echo '<br />';

$usingSamevar = 5;
$usingSamevar += 3;

echo $usingSamevar;

$concat = 'Carl';
$concat .= 'Simpson';


?>


<section>
        <header>
            <h1 class="page-title">
                <span class="sub-title">Arithmetic</span>
                <span style="float:right"><a href="workshop-index.php">< Back</a></span>
            </h1>
        </header>
    </section>
    <section>
        <p></p>
    </section>
    </body>
    </html>