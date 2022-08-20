<h1>Bye</h1>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $xml = simplexml_load_file('http://localhost/MovieWire/movie.xml');
$xml = simplexml_load_file('movie.xml');
print_r($xml); 



?>