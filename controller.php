<?php


function getDB()
{
    include "conn.php";
    include "config.php";

    return Connection::open($configArray);
}

function getCars()
{
    $db = getDB();

    $sql = "SELECT * FROM cars ORDER BY carID ASC";
    $cars = $db->query($sql);

    require 'views/index.php';
}

function getCar($id)
{

    $db = getDB();

    $sql = "SELECT * FROM cars where carID = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($data) {
        require "views/form_update.php";
    } else {
        die("Nuk ekziston nje makine me kete id!");
    }

}

function updateCars()
{
    $db = getDB();

//variabli i queryit

    require "model/Car.php";

    $updateCar = new Car($_POST['firm'], $_POST['type'], $_POST['number'],
        $_POST['kmdone'], $_POST['transmission'], $_POST['price'], $_POST['state'], $_POST['id']);

    $updateCar->update($db);
    header('location:/');
}

function addCar()
{
    $db = getDB();

//variabli i queryit

    require "model/Car.php";
    $saveCar = new Car($_POST['firm'], $_POST['type'], $_POST['number'],
        $_POST['kmdone'], $_POST['transmission'], $_POST['price'], $_POST['state']);

    $saveCar->save($db);

    header('location:/');
}


function deleteCar($id)
{
    require "model/Car.php";
    Car::delete($id);
    header('location:/');
}

//koment kot