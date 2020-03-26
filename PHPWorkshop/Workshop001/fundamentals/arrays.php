<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 24/03/2020
 * Time: 19:38
 */


include '../include/header.php';

// Arrays
// --------
//

    // ** Indexed array
    //-----------------

    $aircraft = ["A10-C Thunderbolt","F-18 Hornet","F-16 Viper","Spitfire MKIV"];
    $weapons = array("AGM rockets","MK-84 Bombs","AIM 9 Missiles");

    // ** Displays all types accepted within an array
    //-----------------

    $alltypes =[10, 1.3 ,"Hello World" , true];

    // ** Associated array
    //-----------------

    $pilot = array(
            "firstName" => "Carl",
            "5" => "Simpson",
            "rank" => "Flt Lt",
            "Random Value"
        );

    // ** array_key_exists
    //----------------------

    $search_array = array('first' => 1, 'second' => 4);
    if (array_key_exists('first', $search_array)) {
        echo "The 'first' element is in the array". '<br />';
    }

    echo in_array("AGM", $weapons);
    // check not only the value but th etype is teh saem
    echo in_array(21, $weapons , true);

    // ** Array Push
    //-----------------

    array_push($weapons, "MK-82 Snakeye");
    echo '<br />';
    print_r($weapons);

    // This is teh prefered way of writing php as if the array does not exist it creates
    $weapons[] = "AGM-120";
    echo '<br />';
    print_r($weapons);

    // ** Array Pop
    //-----------------
    // Save the last item in teh array to a variable and remove it
    $lastvalue = array_pop($weapons);
    echo '<br />';
    print_r($lastvalue);
    echo '<br />';
    print_r($weapons);
    echo '<br />';
    // ** Array unset
    //-----------------
    print_r($aircraft);
    echo '<br />';
    unset($aircraft[0],$aircraft[1]);
    print_r($aircraft);
    echo '<br />';

    // Remove via associated array
    print_r($pilot);
    echo '<br />';
    unset($pilot["rank"]);
    print_r($pilot);
    echo '<br />';

    // ** Array Sort
    //-----------------
    sort($weapons);
    //sort($pilots);

    // asort
    // ksort
    //- Sort flags - not covered wtf are they?

    // ** Array Count
    //-----------------

    echo count($weapons);

    // recursive
    echo count($weapons,1);
    echo '<br />';
    echo count($weapons,COUNT_RECURSIVE);
    echo '<br />';

    // ** For Each Loop
    //-----------------

    foreach ($weapons as $weapon)
    {
        echo $weapon."\n";
    }
    echo '<br />';

    foreach ($pilot as $key => $val)
    {
        echo $val ." (".$key.")\n";
    }

    // ** Multi Dimensional
    //----------------------

    $operational_aircraft = array(
            "F-18 Hornet" => array(
                    "weapons" => array("AGM-120","AIM-9X"),
                    "pilots" => array("Lok0","KnightHawk"),
                    "airfields" => array("Khasab","Dubai Int")
            ),
            "F-16 Viper" => array(
                    "weapons" => array("MK-84","MK-82 Snakeye"),
                    "pilots" => array("Lok0","KnightHawk"),
                    "airfields" => array("Qesham Island","Kasaki")
            )
    );

    print_r($operational_aircraft);
    echo '<br />'; echo '<br />';
    // access first value
    print_r($operational_aircraft["F-18 Hornet"]);echo '<br />';
    print_r($operational_aircraft['F-18 Hornet']['weapons']);echo '<br />';
    print_r($operational_aircraft['F-18 Hornet']['weapons'][1]);echo '<br />';


?>

    <section>
        <header>
            <h1 class="page-title">
                <span class="sub-title">Arrays</span>
                <span style="float:right"><a href="workshop-index.php">< Back</a></span>
            </h1>
        </header>
    </section>

    <section>
        <div>
            <p><?php print_r($weapons); ?></p>
            <p><?php print_r($aircraft); ?></p>
            <p><?php print_r($alltypes); ?></p>

            <p><?php print_r($pilot); ?></p>

        </div>
    </section>