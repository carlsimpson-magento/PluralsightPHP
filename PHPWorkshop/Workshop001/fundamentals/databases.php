<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 27/03/2020
 * Time: 12:41
 */

include '../include/header.php';

$dbPassword = "root";
$dbUserName = "root";
$dbServer = "localhost";
$dbName = "workshop001";

$connection=mysqli_connect($dbServer,$dbUserName,$dbPassword,$dbName);
echo mysqli_connect_error();

    if($connection->connect_errno)
    {
        exit(" Database Connection Failed. Reason: ".$connection->connect_error);
    }
    else
    {
        echo "connected";
    }

    //$query = "INSERT INTO Authors (FirstName, LastName, FullName) VALUES ('Carl' , 'Simpson' , 'Carl Simpson' )";
    //$connection->query($query);

    $query = "SELECT FirstName, LastName, FullName FROM Authors ORDER BY FirstName";
    $resultObj = $connection->query($query);

    if($resultObj->num_rows > 0){
        while( $singleRowFromQuery = $resultObj->fetch_assoc())
        {
            //print_r($singleRowFromQuery);
            echo "Author:".$singleRowFromQuery['FirstName']."<br />";
        }
    }
    //echo "Newly Created Author Id: ".$connection->insert_id;
    //$connection->close();
    $resultObj->close();













?>

<section>
    <header>
        <h1 class="page-title">
            <span class="sub-title">Datbases</span>
            <span style="float:right"><a href="workshop-index.php">< Back</a></span>
        </h1>
    </header>
</section>

<section>
    <p></p>
</section>

</body>
</html>