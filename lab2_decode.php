<?php

$json = '{"name":"Maria","age":20,"email":"maria@example.com"}';


$object = json_decode($json);


$array = json_decode($json, true);


echo "Object: " . $object->name .  PHP_EOL;
echo "Array: " . $array['email'];
?>
