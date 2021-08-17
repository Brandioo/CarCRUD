<?php

include "config.php";
require "controller.php";
// KOMENT
//$db = Connection::open($configArray);

//if($_SERVER['REQUEST_URI'] == '/api/makina'){
//
//    $sql = "SELECT * FROM cars";
//    $stmt = $db->prepare($sql);
//    $stmt->execute();
//    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//    echo json_encode($data);
//
//}
//die(var_dump($_SERVER));
//if(isset($_GET['id'])){
//
//    $id = $_GET['id'];
//
//    $sql = "SELECT * FROM cars where carID = :id";
//    $stmt = $db->prepare($sql);
//    die(var_dump($_SERVER));
//
//    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
//    $stmt->execute();
//    $data = $stmt->fetch(PDO::FETCH_ASSOC);
//    echo json_encode($data);
//
//}

//$_SERVER['REQUEST_URI'] == '/api/makina';
//var_dump($_SERVER);


if (!empty($_SERVER['REQUEST_URI'])) {

    if ($_SERVER['REQUEST_URI'] == '/' && $_SERVER['REQUEST_METHOD'] == 'GET') {
        getCars();
    } elseif (strpos($_SERVER['REQUEST_URI'], '/delete/') !== false && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $uriParts = explode("/", $_SERVER['REQUEST_URI']);
        $id = $uriParts[2];
        deleteCar($id);
    } elseif (strpos($_SERVER['REQUEST_URI'], '/update/') !== false) {
        $uriParts = explode("/", $_SERVER['REQUEST_URI']);
        $id = $uriParts[2];
        getCar($id);
    } elseif (strpos($_SERVER['REQUEST_URI'], '/save') !== false && $_SERVER['REQUEST_METHOD'] == 'POST') {
        updateCars();
    } elseif (strpos($_SERVER['REQUEST_URI'], '/') !== false && $_SERVER['REQUEST_METHOD'] == 'POST') {
        addCar();
    }
//    die("asnje kusht su plotesua");
}
//komentkoment

?>


