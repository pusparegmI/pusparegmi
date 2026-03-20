<?php
$mysqli = new mysqli("localhost", "2382921", "Sijapati@1881", "db2382921");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset("utf8mb4");
?>