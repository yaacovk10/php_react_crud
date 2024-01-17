<?php

// Read the JSON file content
$jsonData = file_get_contents('data.json');

// Decode the JSON data
$data = json_decode($jsonData, true);

// Display the information
echo 'Name: ' . $data['name'] . '<br>';
echo 'Age: ' . $data['age'] . '<br>';
echo 'City: ' . $data['city'] . '<br>';
echo 'Is Student: ' . ($data['isStudent'] ? 'Yes' : 'No') . '<br>';

echo 'Grades:<br>';
foreach ($data['grades'] as $subject => $grade) {
    echo $subject . ': ' . $grade . '<br>';
}

echo 'Hobbies: ' . implode(', ', $data['hobbies']);

?>
