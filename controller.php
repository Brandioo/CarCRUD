<?php


function getDB()
{
    include "conn.php";
    include "config.php";

    return Connection::open($configArray);
}

function getCars()
{

    require "Car.php";

    Car::getCars();

//    header('location:/');

}

function getCar($id)
{
    $db = getDB();
    require "Car.php";
    Car::getCarByID($id,$db);

}

function updateCars()
{
    $db = getDB();

//variabli i queryit

    require "Car.php";

    $updateCar = new Car($_POST['firm'], $_POST['type'], $_POST['number'],
        $_POST['kmdone'], $_POST['transmission'], $_POST['price'], $_POST['state'], $_POST['id']);

    $updateCar->update($db);
    header('location:/');
}

function addCar()
{
    $db = getDB();

//variabli i queryit

    require "Car.php";
    $saveCar = new Car($_POST['firm'], $_POST['type'], $_POST['number'],
        $_POST['kmdone'], $_POST['transmission'], $_POST['price'], $_POST['state']);

    $saveCar->save($db);

    header('location:/');
}


function deleteCar($id)
{
    require "Car.php";
    Car::delete($id);
    header('location:/');
}