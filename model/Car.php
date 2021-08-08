<?php

class Car
{
    private $carID;
    private $firm;
    private $type;
    private $yearOfProduction;
    private $KMDone;
    private $transmission;
    private $price;
    private $state;

    /**
     * Cars constructor.
     * @param $carID
     * @param $firm
     * @param $type
     * @param $yearOfProduction
     * @param $KMDone
     * @param $transmission
     * @param $price
     * @param $state
     */
    public function __construct($firm, $type, $yearOfProduction, $KMDone, $transmission, $price, $state, $carID=null)
    {
        $this->carID = $carID;
        $this->firm = $firm;
        $this->type = $type;
        $this->yearOfProduction = $yearOfProduction;
        $this->KMDone = $KMDone;
        $this->transmission = $transmission;
        $this->price = $price;
        $this->state = $state;
    }

    public function save($db)
    {
        $sql = "INSERT INTO cars (firm, type, yearOfProduction, KMDone, transmission, price, state) 
VALUES(:firm,:type,:yearOfProduction,:KMDone,:transmission,:price,:state)";

        $stmt = $db->prepare($sql);

        $stmt->bindparam(':firm', $this->firm, PDO::PARAM_STR);
        $stmt->bindparam(':type', $this->type, PDO::PARAM_STR);
        $stmt->bindparam(':yearOfProduction', $this->yearOfProduction, PDO::PARAM_STR);
        $stmt->bindparam(':KMDone', $this->KMDone, PDO::PARAM_INT);
        $stmt->bindparam(':transmission', $this->transmission, PDO::PARAM_STR);
        $stmt->bindparam(':price', $this->price, PDO::PARAM_INT);
        $stmt->bindparam(':state', $this->state, PDO::PARAM_STR);

        $stmt->execute();
    }

    public function update($db){

        $sql = "
    UPDATE cars
SET firm = :firm, type = :type ,
    yearOfProduction = :yearOfProduction,
    KMDone = :KMDone,
    transmission = :transmission,
    price = :price,
    state = :state
WHERE carID = :id;
    ";

        $stmt = $db->prepare($sql);

        $stmt->bindparam(':firm', $this->firm, PDO::PARAM_STR);
        $stmt->bindparam(':type', $this->type, PDO::PARAM_STR);
        $stmt->bindparam(':yearOfProduction', $this->yearOfProduction, PDO::PARAM_STR);
        $stmt->bindparam(':KMDone', $this->KMDone, PDO::PARAM_INT);
        $stmt->bindparam(':transmission', $this->transmission, PDO::PARAM_STR);
        $stmt->bindparam(':price', $this->price, PDO::PARAM_INT);
        $stmt->bindparam(':state', $this->state, PDO::PARAM_STR);
        $stmt->bindparam(':id', $this->carID, PDO::PARAM_INT);

        $stmt->execute();

    }

    public static function delete($id){
        require "conn.php";
        require "config.php";

        $db=Connection::open($configArray);
        $sql = "DELETE FROM cars where carID = :carID";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':carID',  $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    /**
     * @return mixed
     */
    public function getCarID()
    {
        return $this->carID;
    }

    /**
     * @param mixed $carID
     */
    public function setCarID($carID): void
    {
        $this->carID = $carID;
    }

    /**
     * @return mixed
     */
    public function getFirm()
    {
        return $this->firm;
    }

    /**
     * @param mixed $firm
     */
    public function setFirm($firm): void
    {
        $this->firm = $firm;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getYearOfProduction()
    {
        return $this->yearOfProduction;
    }

    /**
     * @param mixed $yearOfProduction
     */
    public function setYearOfProduction($yearOfProduction): void
    {
        $this->yearOfProduction = $yearOfProduction;
    }

    /**
     * @return mixed
     */
    public function getKMDone()
    {
        return $this->KMDone;
    }

    /**
     * @param mixed $KMDone
     */
    public function setKMDone($KMDone): void
    {
        $this->KMDone = $KMDone;
    }

    /**
     * @return mixed
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * @param mixed $transmission
     */
    public function setTransmission($transmission): void
    {
        $this->transmission = $transmission;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }


}

?>