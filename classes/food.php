<?php
require_once './products.php';
class Food extends Product {
    public $expirationDate;
    public $typeFood;
    public $grams;

    function __construct ($_brand, $_name, $_price, $_description, $_expirationDate, $_typeFood, $_grams) {
    
        $this->brand = $_brand;
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;

        $this->setExpirationDate($_expirationDate);
        $this->setTypeFood($_typeFood);
        $this->setGrams($_grams);


    }
    
    // GET AND SET THE VALUE
    //EXPIRATION DATE VALUE
    public function getExpirationDate() {
        return $this->expirationDate;
    }
    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;
    
        return $this;
    }

    //TYPE FOOD VALUE (DRY, MORSELS OR PATE)
    public function getTypeFood() {
        return $this->typeFood;
    }
    public function setTypeFood($typeFood) {
        $this->typeFood = $typeFood;
    
        return $this;
    }

     //GRAMS FOOD VALUE 
     public function getGrams() {
        return $this->grams;
    }
    public function setGrams($grams) {
        $this->grams = $grams;
    
        return $this;
    }
    
};

?>