<?php

include '../include/header.php';

include 'additional/classes/Person.php';
include 'additional/classes/Author.php';

// will terminate at the point it cannot find the file
// require 'additional/classes/Author.php';

// include_once '../include/header.php';
// Files that contains classes or functions



// Classes
// -------------------
//

    // Display the contents of teh classes found in teh additional/classes/ dir

    $newGuy = new Person('Carl','Simpson','1978');
    print_r($newGuy);
    echo '<br />';
    echo $newGuy::AVG_LIFE_SPAN;
    echo '<br />';
    echo Person::AVG_LIFE_SPAN;
    echo '<br />';
    echo Author::$centuryPopular;
    echo '<br />';
    $luke = new Author("Luke","SkyWalker",'1890');
    echo '<br />';
    print_r($luke);
    echo '<br />';
    print_r($luke->getCompleteName());
    echo '<br />';

?>

    <section>
        <header>
            <h1 class="page-title">
                <span class="sub-title">Classes</span>
                <span style="float:right"><a href="workshop-index.php">< Back</a></span>
            </h1>
        </header>
    </section>
    <section>
        <p></p>
    </section>
    </body>
    </html>