<?php

define("DB_SERVER", "192.168.1.66");
define("DB_USER", "baine101");
define("DB_PASSWORD", "blink182");
define("DB_DATABASE", "test");



// Create connection
$conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected";

?>

