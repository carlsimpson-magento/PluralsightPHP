<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 02/04/2020
 * Time: 15:08
 */


class Database{

    // specify your own database credentials
    private $host = "127.0.0.1";
    private $db_name = "phpshop";
    private $username = "root";
    private $password = "root";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;

    }
}

//class databasecon
//{
//    function __construct($pdo)
//    {
//        $this->pdo = $pdo;
//    }
//
//    function getData()
//    {
//        $query = $this->pdo->prepare('SELECT * FROM database');
//        $query->execute();
//        return $query->fetchAll();
//    }
//}
//
//$db = new databasecon($pdo);
//$rows = $db->getData();
//
//
//echo $rows;



/*
$mysqli = new mysqli("127.0.01","root","root","phpshop");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else {
echo "connection complete";
*/
?>