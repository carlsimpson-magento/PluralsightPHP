<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 02/04/2020
 * Time: 13:48
 */
include_once 'includes/environment_variables.php';

?>
<style>
    header {
        background:black;
    }
    .header-container {
        background:black;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page_title; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    </head>
<body>

<header>
    <div class="container">
        <div class="header-container">
            <div class="logo">
                <img src="web/img/blank-square.jpeg" class="logo" alt="logo">
            </div>
        </div>
    </div>
</header>