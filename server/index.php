<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$response = array(
    "status" => "success",
    "message" => "Data retrieved successfully.",
    "data" => array(
        array("name" => "John Doe", "age" => 30, "email" => "johndoe@example.com", "location" => "New York"),
        array("name" => "Jane Smith", "age" => 25, "email" => "janesmith@example.com", "location" => "Los Angeles"),
        array("name" => "Alice Johnson", "age" => 28, "email" => "alicejohnson@example.com", "location" => "Chicago"),
        array("name" => "Michael Brown", "age" => 35, "email" => "michaelbrown@example.com", "location" => "Houston"),
        array("name" => "Emily Davis", "age" => 22, "email" => "emilydavis@example.com", "location" => "Phoenix"),
        array("name" => "David Wilson", "age" => 40, "email" => "davidwilson@example.com", "location" => "San Antonio"),
        array("name" => "Sophia Garcia", "age" => 27, "email" => "sophiagarcia@example.com", "location" => "San Diego"),
        array("name" => "James Martinez", "age" => 33, "email" => "jamesmartinez@example.com", "location" => "Dallas"),
        array("name" => "Isabella Rodriguez", "age" => 29, "email" => "isabellarodriguez@example.com", "location" => "San Jose"),
        array("name" => "William Hernandez", "age" => 31, "email" => "williamhernandez@example.com", "location" => "Austin")
    )
);

header('Content-Type: application/json');
echo json_encode($response);
?>
