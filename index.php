<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

require 'db.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$resource = $path[1] ?? null;
$id = $path[2] ?? null;

$data = json_decode(file_get_contents("php://input"), true);


if ($method === "GET" && $resource === "stores") {
    $result = $conn->query("SELECT * FROM stores");
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
}


if ($method === "GET" && $resource === "items" && $id) {
    $stmt = $conn->prepare("SELECT * FROM items WHERE store_id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    


if ($method === "POST" && $resource === "stores") {
    $stmt = $conn->prepare("INSERT INTO stores (name) VALUES (?)");
    $stmt->bind_param("s", $data['name']);
    $stmt->execute();
    echo json_encode(["message" => "Store created"]);
}


if ($method === "POST" && $resource === "items" && $id) {
    $stmt = $conn->prepare("INSERT INTO items (store_id, name) VALUES (?, ?)");
    $stmt->bind_param("is", $id, $data['name']);
    $stmt->execute();
    echo json_encode(["message" => "Item added"]);
}




if ($method === "PUT" && $resource === "items" && $id) {
    $stmt = $conn->prepare("UPDATE items SET checked=? WHERE id=?");
    $stmt->bind_param("ii", $data['checked'], $id);
    $stmt->execute();
    echo json_encode(["message" => "Item updated"]);
}


if ($method === "DELETE" && $resource === "stores" && $id) {
    $stmt = $conn->prepare("DELETE FROM stores WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    echo json_encode(["message" => "Store deleted"]);
}


if ($method === "DELETE" && $resource === "items" && $id) {
    $stmt = $conn->prepare("DELETE FROM items WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    echo json_encode(["message" => "Item deleted"]);
}
}