
<?php
header('Content-Type: application/json');


$json = file_get_contents("php://input");


$data = json_decode($json, true);


$name = trim($data["name"] ?? "");

if ($name !== "") {

    $response = [
        "status" => "success",
        "message" => "Welcome, " . $name . "!"
    ];

} else {

    $response = [
        "status" => "error",
        "message" => "Please enter your name."
    ];
}


echo json_encode($response);
?>
