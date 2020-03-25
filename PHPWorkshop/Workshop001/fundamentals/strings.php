<?php

include '../include/header.php';

// Strings
// --------
//

// sets a standard var
$currency = 'penny';

// both ways you can use a variable within a string
$samplestring1 = "need to spend a $currency";
$samplestring2 = 'spend a '.  $currency;

// Use of double & single quotes
$stgeorge = 'St, Georges\'s Day';
$double_quote = "St, Georges's Day";

// <p><?php echo $var . "nd Place"; ? ></p>
// using numbers as within a string
$var = 2;


// Sets a Var to manipulate further
$quote = "this is probably the best quote you'll ever hear";

// Built in PHP str functions
$uppercase = strtoupper($quote);
$lowercase = strtolower($quote);

$str_len = strlen($quote);
$str_pos = strpos($quote , 'best');
$str_replace = str_replace('best','worst',$quote , $count);
$varArray = str_split($quote);

?>

    <section>
        <header>
            <h1 class="page-title">
                <span class="sub-title">Strings</span>
                <span style="float:right"><a href="workshop-index.php">< Back</a></span>
            </h1>
        </header>
    </section>

    <section>
        <p><?php echo $samplestring1; ?></p>
        <p><?php echo $samplestring2; ?></p>
        <pre>$stgeorge = 'St, Georges\'s Day';</pre>
        <p>Today its <?php echo $stgeorge; ?></p>
        <p>Today its also <?php echo $double_quote; ?></p>
        <p><?php echo $var . "nd Place"; ?></p>
        <p><?php echo $uppercase; ?></p>
        <p><?php echo $lowercase; ?></p>
        <p>There are <?php echo $str_len; ?> characters in the string named $quote</p>
        <p>the word 'best is found at' strpos = <?php echo $str_pos; ?></p>
        <p>use str_replace to switch out words : quote = <?php echo $str_replace; ?></p>
        <p><?php echo $count; ?></p>
        <p><?php echo substr($quote, 4, -5); ?></p>
        <p><?php print_r($varArray); ?></p>
        <p><?php echo
            <<<EOT
                this is a selection random test to display the use of EOT
EOT;
            ?>
        </p>
    </section>