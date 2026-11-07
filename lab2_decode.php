<?php
// Create a JSON string
$json = '{"name":"Maria","age":20,"email":"maria@example.com"}';

// Decode JSON into a PHP object
$object = json_decode($json);

// Decode JSON into an associative array
$array = json_decode($json, true);

// Display values
echo "Object: " . $object->name .  PHP_EOL;
echo "Array: " . $array['email'];
?>
