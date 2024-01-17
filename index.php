<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Content-Type: application/json');
// Sample list of data
$listOfData = [ "name",    "age",    "address",    "city"];

// Encode the list to JSON
$jsonData = json_encode($listOfData);

// Output the JSON data
echo $jsonData;

?>