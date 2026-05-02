<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "storesdb";

$conn = new sqli($host, $user, $pass, $db);

if(conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}
