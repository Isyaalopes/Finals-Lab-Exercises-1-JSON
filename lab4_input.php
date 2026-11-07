
<?php

$json = file_get_contents("php://input");


$data = json_decode($json, true);


if (isset($data["username"], $data["password"])) {
    echo "Username: " . $data["username"] . "\n";
    echo "Password: " . $data["password"];
} else {
    echo "Invalid JSON input.";
}
?>
