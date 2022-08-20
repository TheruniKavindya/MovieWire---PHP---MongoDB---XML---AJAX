<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "vendor/autoload.php";
$dbname = "mydb";
// $mongo = new MongoClient();
// $mongo = new MongoDB\Client("mongodb://localhost:27017");
$con = new MongoDB\Client("mongodb://localhost:27017");



$db = $con->selectDatabase('mydb');
   echo "Selected";

   $col = $db->selectCollection('names');
   $document = array( 
      "name" => "Deny", 
      "password" => "1234"
   );

   $col->insertOne($document);
   echo "successfully";
